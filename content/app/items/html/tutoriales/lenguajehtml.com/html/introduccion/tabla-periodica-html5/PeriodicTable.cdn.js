import "./PeriodicElement.cdn.js";
import { DATA } from "./ElementsData.cdn.js";

export default class PeriodicTable extends HTMLElement {
  constructor() {
    super();
    this.attachShadow({ mode: "open" });
    this.render();
  }

  get styles() {
    return /* css */`
      .elements {
        display: grid;
        grid-gap: 1px;
        grid-auto-flow: column;
        grid-template-rows: repeat(7, 1fr);
        grid-template-columns: repeat(17, 1fr);
      }

      .elements periodic-element:nth-child(8),
      .elements periodic-element:nth-child(42),
      .elements periodic-element:nth-child(48),
      .elements periodic-element:nth-child(54),
      .elements periodic-element:nth-child(60),
      .elements periodic-element:nth-child(66),
      .elements periodic-element:nth-child(72),
      .elements periodic-element:nth-child(78) {
        grid-row: 2;
      }

      .elements periodic-element:nth-child(14),
      .elements periodic-element:nth-child(18),
      .elements periodic-element:nth-child(22),
      .elements periodic-element:nth-child(26),
      .elements periodic-element:nth-child(30),
      .elements periodic-element:nth-child(34),
      .elements periodic-element:nth-child(38) {
        grid-row: 4;
      }

      .lantanids {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 0 12px;
        margin-top: 50px;
      }

      .semantics {
        display: grid;
        grid-template-rows: repeat(2, 1fr);
        grid-template-columns: repeat(12, 1fr);
        grid-gap: 1px;
      }

      .deprecated {
        display: grid;
        grid-template-rows: repeat(2, 1fr);
        grid-template-columns: repeat(5, 1fr);
        grid-gap: 1px;
      }
    `;
  }

  get elements() {
    return DATA.elements
      .map(
        (item, index) => /* html */`<periodic-element num="${index + 1}"
          abbr="${item.abbr}" name="${item.name}" href="${item.href}"></periodic-element>`
      )
      .join("");
  }

  get semantics() {
    return DATA.semantics
      .map(
        (item, index) => /* html */`<periodic-element num="${index + 91}"
        abbr="${item.abbr}" name="${item.name}" href="${item.href}"></periodic-element>`
      )
      .join("");
  }

  get deprecated() {
    return DATA.deprecated
      .map(
        (item, index) => /* html */`<periodic-element num="${index + 115}"
        abbr="${item.abbr}" name="${item.name}" href="${item.href}"></periodic-element>`
      )
      .join("");
  }

  render() {
    this.shadowRoot.innerHTML = /* html */`
      <style>${this.styles}</style>
      <div class="elements">${this.elements}</div>
      <div class="lantanids">
        <div class="semantics">${this.semantics}</div>
        <div class="deprecated">${this.deprecated}</div>
      </div>
    `;
  }
}

customElements.define("periodic-table", PeriodicTable);
