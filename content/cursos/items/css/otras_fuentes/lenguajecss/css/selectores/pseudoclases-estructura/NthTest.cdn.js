class NthTest extends HTMLElement {
  constructor() {
    super();
    this.attachShadow({ mode: "open" });
  }

  static get styles() {
    return /* css */`
      .nth-test {
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      .nth-test input {
        padding: 5px;
        max-width: 70px;
        margin-bottom: 0.5em;
        font-family: var(--header-font);
        font-size: 18px;
      }
      .nth-test .table {
        display: flex;
        flex-wrap: wrap;
      }
      .nth-test .cell {
        border: 1px solid #aaa;
        width: 75px;
        height: 32px;
        margin: 3px;
      }
    `;
  }

  init() {
    const nth = this.shadowRoot.querySelector(".nth-test");
    const input = nth.querySelector("input");
    const style = nth.querySelector(".nth-style");
    input.onkeyup = (ev) => {
      const value = ev.target.value;
      style.textContent = `.nth-test .cell:nth-child(${value}) { background: green; }`;
    };
  }

  connectedCallback() {
    this.render();
  }

  render() {
    this.shadowRoot.innerHTML = /* html */`
    <style>${NthTest.styles}</style>
    <div class="nth-test">
      <code>:nth-child(<input type="text" placeholder="2n">)</code>
      <div class="table">
        ${"<div class=\"cell\"></div>".repeat(60)}
      </div>
      <style class="nth-style"></style>
    </div>`;
    this.init();
  }
}

customElements.define("nth-test", NthTest);
