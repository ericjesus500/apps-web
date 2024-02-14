import { colors, limits } from "./PeriodicElement.cdn.js";

const HEADERS = [
  { name: "Documento", selected: false },
  { name: "Metadatos", selected: false },
  { name: "Agrupación", selected: false },
  { name: "Textual", selected: false },
  { name: "Multimedia", selected: false },
  { name: "Tablas", selected: false },
  { name: "Formulario", selected: false },
  { name: "Scripting", selected: false },
  { name: "Interactivas", selected: false },
  { name: "Semánticas", selected: false },
  { name: "Ideogramáticas", selected: false },
  { name: "Edición", selected: false },
  { name: "Obsoletas", selected: false },
];

export default class HeaderList extends HTMLElement {
  constructor() {
    super();
    this.attachShadow({ mode: "open" });
    this.render();

    document.addEventListener("DISABLE_HEADER", (v) => this.disable(v.detail));
    document.addEventListener("ENABLE_HEADER", (v) => this.enable(v.detail));
  }

  get styles() {
    return `
      :host {
        display: grid;
        grid-template-columns: repeat(13, 1fr);
        color: white;
        margin: 0 0 22px 0;
        font-family: Montserrat;
        font-size: 14px;
      }

      :host > div {
        padding: 2px 10px;
        text-align: center;
        user-select: none;
        border: 1px solid transparent;
      }

      :host > div:hover {
        cursor: pointer;
        border: 1px solid #fff;
        color: #fff;
      }

      :host > .active {
        background: #000;
        cursor: pointer;
      }
    `;
  }

  enable(v) {
    HEADERS[v].selected = true;
    this.render();
  }

  disable(v) {
    HEADERS[v].selected = false;
    this.render();
  }

  render() {
    this.shadowRoot.innerHTML =
      `<style>${this.styles}</style>` +
      HEADERS.map(
        (item, index) => `<div data-key="${index}" ${item.selected ? "class=\"active\"" : ""}>${item.name}</div>`
      ).join("");

    const divs = Array.from(this.shadowRoot.querySelectorAll("div"));
    divs.forEach((div, index) => {
      const color = colors[index];
      const limit = { prev: limits[index - 1] || 0, next: limits[index] };
      div.onclick = () => {
        const isActive = div.classList.contains("active");
        divs.forEach(div => div.classList.remove("active"));
        div.classList.toggle("active");

        if (!isActive) {
          this.dispatchEvent(
            new CustomEvent("HIGHLIGHT_ELEMENTS", { detail: { color, limit }, bubbles: true, composed: true })
          );
        } else {
          this.dispatchEvent(
            new CustomEvent("UNHIGHLIGHT_ELEMENTS", { detail: { color, limit }, bubbles: true, composed: true })
          );
          div.classList.remove("active");
        }
      };
      // div.onmouseover = () =>
      //   this.dispatchEvent(
      //     new CustomEvent("HIGHLIGHT_ELEMENTS", { detail: { color, limit }, bubbles: true, composed: true })
      //   );
      // div.onmouseleave = () =>
      //   this.dispatchEvent(
      //     new CustomEvent("UNHIGHLIGHT_ELEMENTS", { detail: { color, limit }, bubbles: true, composed: true })
      //   );
    });
  }
}

customElements.define("header-list", HeaderList);
