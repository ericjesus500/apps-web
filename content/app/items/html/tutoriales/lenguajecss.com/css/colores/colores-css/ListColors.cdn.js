const COLORS = [
  "black", "navy", "darkblue", "mediumblue", "blue", "darkgreen", "green", "teal", "darkcyan", "deepskyblue", "darkturquoise",
  "mediumspringgreen", "lime", "springgreen", "aqua", "cyan", "midnightblue", "dodgerblue", "lightseagreen", "forestgreen",
  "seagreen", "darkslategray", "darkslategrey", "limegreen", "mediumseagreen", "turquoise", "royalblue", "steelblue",
  "darkslateblue", "mediumturquoise", "indigo", "darkolivegreen", "cadetblue", "cornflowerblue", "mediumaquamarine",
  "dimgray", "dimgrey", "slateblue", "olivedrab", "slategray", "slategrey", "lightslategray", "lightslategrey",
  "mediumslateblue", "lawngreen", "chartreuse", "aquamarine", "maroon", "purple", "olive", "gray", "grey", "skyblue",
  "lightskyblue", "blueviolet", "darkred", "darkmagenta", "saddlebrown", "darkseagreen", "lightgreen", "mediumpurple",
  "darkviolet", "rebeccapurple", "palegreen", "darkorchid", "yellowgreen", "sienna", "brown", "darkgray", "darkgrey",
  "lightblue", "greenyellow", "paleturquoise", "lightsteelblue", "powderblue", "firebrick", "darkgoldenrod", "mediumorchid",
  "rosybrown", "darkkhaki", "silver", "mediumvioletred", "indianred", "peru", "chocolate", "tan", "lightgray", "lightgrey",
  "thistle", "orchid", "goldenrod", "palevioletred", "crimson", "gainsboro", "plum", "burlywood", "lightcyan", "lavender",
  "darksalmon", "violet", "palegoldenrod", "lightcoral", "khaki", "aliceblue", "honeydew", "azure", "sandybrown", "wheat",
  "beige", "whitesmoke", "mintcream", "ghostwhite", "salmon", "antiquewhite", "linen", "lightgoldenrodyellow", "oldlace",
  "red", "fuchsia", "magenta", "deeppink", "orangered", "tomato", "hotpink", "coral", "darkorange", "lightsalmon", "orange",
  "lightpink", "pink", "gold", "peachpuff", "navajowhite", "moccasin", "bisque", "mistyrose", "blanchedalmond", "papayawhip",
  "lavenderblush", "seashell", "cornsilk", "lemonchiffon", "floralwhite", "snow", "yellow", "lightyellow", "ivory", "white"
];

const DARK_COLORS = [
  "black", "navy", "darkblue", "midnightblue", "darkslategray", "darkslategrey", "darkslateblue", "indigo", "maroon", "darkred",
  "darkmagenta", "purple", "mediumblue", "blue"
];

class ListColors extends HTMLElement {
  constructor() {
    super();
    this.attachShadow({ mode: "open" });
  }

  static get styles() {
    return `
      details {
        max-width: 100%;
      }

      details summary {
        font-weight: normal;
        background: #336;
        color: #eee;
        padding: 8px 20px 4px;
        border-radius: 6px;
        display: inline-block;
      }

      details summary:hover {
        background: #668;
        cursor: pointer;
      }

      .colores {
        max-width: 100%;
        margin-top: 1em;
        display: grid;
        gap: 5px;
        grid-template-columns: repeat(4, 25%);
      }
    `;
  }

  connectedCallback() {
    this.render();
    this.showColors();
  }

  showColors() {
    const colores = this.shadowRoot.querySelector(".colores");
    colores.textContent = "";
    COLORS.forEach(color => {
      const div = document.createElement("div");
      div.style.backgroundColor = div.textContent = color;
      if (DARK_COLORS.includes(color)) {
        div.style.color = "#ddd";
      }
      div.style.padding = "8px 6px 4px 6px";
      colores.appendChild(div);
    });
  }

  render() {
    this.shadowRoot.innerHTML = `
      <style>${ListColors.styles}</style>
      <details>
        <summary>Pulsa para mostrar lista de colores...</summary>
        <div class="colores"></div>
      </details>
    `;
  }
}

customElements.define("list-colors", ListColors);
