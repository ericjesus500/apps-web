const BITCOIN_ADDRESS = "1J2vevXszhsKJF7EWyNcNLVHqLEFpgtzZ4";

const DISKETTE = /* svg */`
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" >
  <path fill="#fff" d="M0 1v512h512V63L453 1h-34v202H96V1H0z"/>
  <rect fill="#fff" width="70" height="150" x="300" y="25" rx="0" ry="0"/>
</svg>
`;

const DOLLAR = /* svg */`
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292 292">
  <path fill="#fff" d="M128 260v30c3 1 7 2 17 2 11 0 15-1 19-2v-30c21-3 41-10 54-22s19-26 19-44c0-31-18-54-55-68l-36-14-14-6c-3-2-4-5-4-9 0-10 7-15 21-15s35 5 61 16c6-5 11-12 15-21s6-18 6-27c-26-11-48-15-67-17V2c-5-1-7-2-17-2s-14 1-19 2v32c-18 3-34 8-47 23a64 64 0 0 0-17 44c0 29 18 50 53 63l37 14c12 4 18 11 18 19 0 5-2 9-7 12-4 3-10 4-18 4-19 0-43-7-70-22-6 4-11 11-15 20-5 10-7 18-7 26 30 18 44 19 73 23z"/>
</svg>`;

const TWITCH = /* svg */`
<svg id="twitch" viewBox="0 0 1024 1024">
  <path fill="transparent" d="M 298.096,84.191 V 618.932 H 458.514 V 743.705 L 583.287,618.932 H 725.904 L 868.479,476.355 V 84.191 Z"/>
  <path fill="#fff" d="m262.451 12.904-178.26 178.26v641.672h213.905v178.26l178.26-178.26h142.576L939.809 512V12.904H262.45zm35.645 71.287h570.383v392.164L725.904 618.932H583.287L458.514 743.705V618.932H298.096V84.192zM494.158 208.51v216.36h71.328V208.51h-71.328zm196 0v216.36h71.328V208.51h-71.328z"/>
</svg>
`;

class CheatsheetDonation extends HTMLElement {
  constructor() {
    super();
    this.attachShadow({ mode: "open" });
  }

  static get styles() {
    return /* css */`
      img {
        display: block;
        height: auto;
        max-width: 100%;
      }

      .donation {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }

      .donation input.bitcoin {
        background: #bbb;
        border: 1px solid #999;
        color: #666;
        display: block;
        font-family: var(--terminal-font);
        font-size: 1rem;
        font-weight: 500;
        letter-spacing: -1px;
        padding: 4px;
        width: 325px;
      }

      .donation input,
      .donation select,
      .donation button {
        font-family: var(--font-strong);
        font-variation-settings: "wght" 700;
        font-size: 1.25rem;
        letter-spacing: -0.75px;
        padding: 10px 20px;
        margin: 0.25em 0;
      }

      .donation select {
        border: 1px solid #ddd;
        display: block;
      }

      .donation input[type="submit"],
      .donation button {
        background: #d77218 linear-gradient(180deg,#ee8222 50%,#d77218 0);
        border: 1px solid #a06121;
        color: #fff;
        cursor: pointer;
        outline: 0;
        padding: 12px 18px;
        text-shadow: 1px 1px 2px rgb(0 0 0 / 80%);
      }

      .donation input[type=submit]:hover,
      .donation button:hover,
      .donation #twitch:hover {
        background: #1c7e0f linear-gradient(180deg,#339726 50%,#1c7e0f 0);
        border-color: #146009;
      }

      .donation button#twitch {
        background: #9933FF linear-gradient(180deg, #9933FF 50%, #4C197F 0);
        border-color: #4C197F;
      }

      .donation span {
        color: #444;
        font-size: 0.9rem;
      }

      .donation button svg {
        width: 24px;
        height: 24px;
        vertical-align: bottom;
        filter: drop-shadow(1px 1px 2px #0008);
        margin-right: 0.25em;
      }
    `;
  }

  connectedCallback() {
    this.buttonId = this.getAttribute("button-id");
    this.url = this.getAttribute("url");
    this.domain = this.getAttribute("domain");
    this.name = this.getAttribute("name");
    this.render();
    this.shadowRoot.querySelector("#amount").addEventListener("change", () => this.change());
    this.shadowRoot.querySelector("#twitch").addEventListener("click", () => (location.href = "https://www.twitch.tv/products/manzdev/ticket"));
  }

  change() {
    const donation = this.shadowRoot.querySelector(".donation");
    const amount = donation.querySelector("#amount").value;
    if (amount === "0") {
      donation.action = this.url || "https://www.emezeta.com/doc/css3-cheatsheet/css3-cheatsheet.php";
      donation.method = "get";
      const input = donation.querySelector("button#submit");
      input.innerHTML = `${DISKETTE} Descargar`;
      input.setAttribute("onClick", `ga('send', 'event', '${this.domain}', 'Descarga CheatSheet', document.referrer, 0);`);
    } else {
      donation.action = "https://www.paypal.com/cgi-bin/webscr";
      donation.method = "post";
      const input = donation.querySelector("button#submit");
      input.innerHTML = `${DOLLAR} Donar y descargar`;
      input.setAttribute("onClick", `ga('send', 'event', '${this.domain}', 'Donación CheatSheet', document.referrer, donation.amount.value);`);
    }
  }

  render() {
    this.shadowRoot.innerHTML = /* html */`
      <style>${CheatsheetDonation.styles}</style>
      <form class="donation" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
        <img src="/assets/paypal-donate.png" alt="Paypal">
        <input class="bitcoin" readonly value="bitcoin:${BITCOIN_ADDRESS}" onClick="this.select()">
        <select name="amount" id="amount">
          <option value="0">0 EUR (Snif, snif...)</option>
          <option value="2">2 EUR</option>
          <option value="3">3 EUR</option>
          <option value="4">4 EUR</option>
          <option value="5" selected>5 EUR (¡Gracias!)</option>
          <option value="6">6 EUR</option>
          <option value="7">7 EUR (¡Muy agradecido!)</option>
          <option value="8">8 EUR</option>
          <option value="10">10 EUR (¡Lloro de emoción!)</option>
          <option value="15">15 EUR</option>
          <option value="20">20 EUR (Esto lo tuiteo...)</option>
          <option value="25">25 EUR (¡Logro desbloqueado!)</option>
        </select>
        <input type="hidden" name="cmd" value="_donations">
        <input type="hidden" name="hosted_button_id" value="${this.buttonId}">
        <input type="hidden" name="business" value="joseromanhernandez@gmail.com">
        <input type="hidden" name="return" value="${this.url}">
        <input type="hidden" name="item_name" value="${this.name}">
        <input type="hidden" name="currency_code" id="currency_code" value="EUR">
        <button id="submit" onClick="ga('send', 'event', '${this.domain}', 'Donación CheatSheet', document.referrer, donation.amount.value);">
          ${DOLLAR} Donar y descargar
        </button>
        <span>o también puedes...</span>
        <button id="twitch">${TWITCH} Suscribirte a Twitch</button>
        <span>(Gratis si tienes Amazon Prime)</span>
        <img src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" alt="Paypal">
      </form>
    `;
  }
}

customElements.define("cheatsheet-donation", CheatsheetDonation);
