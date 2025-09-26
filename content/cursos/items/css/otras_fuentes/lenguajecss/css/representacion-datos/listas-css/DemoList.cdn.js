class DemoList extends HTMLElement {
  constructor() {
    super();
    this.attachShadow({ mode: "open" });
  }

  get type() {
    return this.getAttribute("type");
  }

  get alias() {
    if (this.hasAttribute("alias")) {
      return "/" + this.getAttribute("alias");
    }
    return "";
  }

  getNumbers() {
    return [0, 1, 2, 3, 4, 5].map((item, index) => "<li></li>").join("");
  }

  connectedCallback() {
    this.shadowRoot.innerHTML = /* html */`
      <style>
        .box {
          background: #555;
        }
        .title {
          background: #ccc;
          display: inline-block;
          padding: 2px 20px;
          font-weight: bold;
          border-radius: 0 0 100px 0;
        }
        ul {
          margin: 0;
          padding: 0;
          display: grid;
          grid-template-columns: repeat(7, 32px);
          transform: translate(32px, 0);
        }
        li::marker {
          color: black;
          font-size: 1.15rem;
        }
        li {
          list-style-type: ${this.type};
        }
      </style>
      <div class="box">
        <div class="title">${this.type}${this.alias}</div>
        <ul>
          ${this.getNumbers()}
          <li>...</li>
        </ul>
      </div>
    `;
  }
}
customElements.define("demo-list", DemoList);
