import { LitElement, html, css } from "https://unpkg.com/lit-element@2.3.1/lit-element.js?module";
import "./CSSBookPaper.cdn.js";
import "./CSSBookPostit.cdn.js";

export default class CSSBook extends LitElement {
  static get styles() {
    return css`
      :host {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 1100px;
        height: 750px;
        margin: auto;
        background: linear-gradient(
            to right,
            transparent 40%,
            #063968 46%,
            rgba(0, 0, 0, 0.75) 49.9% 50.1%,
            #063968 53%,
            transparent 60% 100%
          ),
          linear-gradient(140deg, #063968 5%, steelblue 35% 70%, #063968 85%);
        box-shadow: 5px 5px 0 rgba(0, 0, 0, 0.05) inset, 8px 8px 8px rgba(0, 0, 0, 0.5), -1px -1px 1px rgba(0, 0, 0, 0.25),
          -4px -4px 5px rgba(0, 0, 0, 0.5), 4px 4px 8px rgba(0, 0, 0, 0.15) inset, -2px -2px 0 rgba(0, 0, 0, 0.2) inset;
      }
    `;
  }

  render() {
    return html`<css-book-paper postits style="--direction: to left"></css-book-paper>`;
  }
}

customElements.define("css-book", CSSBook);
