import PeriodicElement from "./PeriodicElement.cdn.js";

const DATA = {
  elements: [
    { abbr: "H", name: "html", href: "/html/introduccion/estructura-documento-html/" },
    { abbr: "Hd", name: "head", href: "/html/introduccion/estructura-documento-html/" },
    { abbr: "Bd", name: "body", href: "/html/introduccion/estructura-documento-html/" },
    { abbr: "Ti", name: "title", href: "/html/cabecera/etiquetas-html-de-relacion/" },
    { abbr: "Bs", name: "base", href: "/html/cabecera/etiquetas-html-de-relacion/" },
    { abbr: "Lk", name: "link", href: "/html/cabecera/etiquetas-html-de-relacion/" },
    { abbr: "Mt", name: "meta", href: "/html/cabecera/etiquetas-html-de-relacion/" },
    { abbr: "St", name: "style", href: "/html/cabecera/etiquetas-html-de-relacion/" },
    {
      abbr: "P",
      name: "p",
      href: "/html/semantica/etiquetas-html-de-agrupacion/#etiquetas-html-para-agrupaciones",
    },
    {
      abbr: "Hr",
      name: "hr",
      href: "/html/semantica/etiquetas-html-de-agrupacion/#etiquetas-html-para-agrupaciones",
    },
    {
      abbr: "Pre",
      name: "pre",
      href: "/html/semantica/etiquetas-html-de-agrupacion/#etiquetas-html-para-agrupaciones",
    },
    {
      abbr: "Bq",
      name: "blockquote",
      href: "/html/semantica/etiquetas-html-de-agrupacion/#etiquetas-html-para-agrupaciones",
    },
    {
      abbr: "Ol",
      name: "ol",
      href: "/html/semantica/etiquetas-html-de-agrupacion/#etiquetas-html-para-listas",
    },
    {
      abbr: "Ul",
      name: "ul",
      href: "/html/semantica/etiquetas-html-de-agrupacion/#etiquetas-html-para-listas",
    },
    {
      abbr: "Li",
      name: "li",
      href: "/html/semantica/etiquetas-html-de-agrupacion/#etiquetas-html-para-listas",
    },
    {
      abbr: "Dl",
      name: "dl",
      href: "/html/semantica/etiquetas-html-de-agrupacion/#etiquetas-html-para-listas-de-descripciones",
    },
    {
      abbr: "Dt",
      name: "dt",
      href: "/html/semantica/etiquetas-html-de-agrupacion/#etiquetas-html-para-listas-de-descripciones",
    },
    {
      abbr: "Dd",
      name: "dd",
      href: "/html/semantica/etiquetas-html-de-agrupacion/#etiquetas-html-para-listas-de-descripciones",
    },
    {
      abbr: "Fi",
      name: "figure",
      href: "/html/semantica/etiquetas-html-de-agrupacion/#etiquetas-html-para-ilustraciones-figuras",
    },
    {
      abbr: "Fc",
      name: "figcaption",
      href: "/html/semantica/etiquetas-html-de-agrupacion/#etiquetas-html-para-ilustraciones-figuras",
    },
    {
      abbr: "Dv",
      name: "div",
      href: "/html/semantica/etiquetas-html-de-agrupacion/#etiquetas-html-para-agrupaciones",
    },
    {
      abbr: "Mn",
      name: "main",
      href: "/html/semantica/etiquetas-html-de-agrupacion/#etiquetas-html-para-agrupaciones",
    },
    { abbr: "A", name: "a", href: "/html/semantica/enlaces-o-hipervinculos/" },
    {
      abbr: "Em",
      name: "em",
      href: "/html/semantica/etiquetas-html-de-texto/#etiquetas-html-para-fragmentos-de-texto",
    },
    {
      abbr: "Str",
      name: "strong",
      href: "/html/semantica/etiquetas-html-de-texto/#etiquetas-html-para-fragmentos-de-texto",
    },
    {
      abbr: "Sm",
      name: "small",
      href: "/html/semantica/etiquetas-html-de-texto/#etiquetas-html-de-modificacin-de-significado",
    },
    {
      abbr: "S",
      name: "s",
      href: "/html/semantica/etiquetas-html-de-texto/#etiquetas-html-para-fragmentos-de-texto",
    },
    {
      abbr: "Ci",
      name: "cite",
      href: "/html/semantica/etiquetas-html-de-texto/#etiquetas-html-para-fragmentos-de-texto",
    },
    {
      abbr: "Q",
      name: "q",
      href: "/html/semantica/etiquetas-html-de-texto/#etiquetas-html-de-modificacin-de-significado",
    },
    {
      abbr: "Dfn",
      name: "dfn",
      href: "/html/semantica/etiquetas-html-de-texto/#etiquetas-html-de-modificacin-de-significado",
    },
    {
      abbr: "Ab",
      name: "abbr",
      href: "/html/semantica/etiquetas-html-de-texto/#etiquetas-html-de-modificacin-de-significado",
    },
    {
      abbr: "Da",
      name: "data",
      href: "/html/semantica/etiquetas-html-de-texto/#etiquetas-html-orientadas-a-aspectos-informticos",
    },
    {
      abbr: "Tim",
      name: "time",
      href: "/html/semantica/etiquetas-html-de-texto/#etiquetas-html-orientadas-a-aspectos-informticos",
    },
    {
      abbr: "Co",
      name: "code",
      href: "/html/semantica/etiquetas-html-de-texto/#etiquetas-html-orientadas-a-aspectos-informticos",
    },
    {
      abbr: "Va",
      name: "var",
      href: "/html/semantica/etiquetas-html-de-texto/#etiquetas-html-orientadas-a-aspectos-informticos",
    },
    {
      abbr: "Sa",
      name: "samp",
      href: "/html/semantica/etiquetas-html-de-texto/#etiquetas-html-orientadas-a-aspectos-informticos",
    },
    {
      abbr: "Kb",
      name: "kbd",
      href: "/html/semantica/etiquetas-html-de-texto/#etiquetas-html-orientadas-a-aspectos-informticos",
    },
    {
      abbr: "Sub",
      name: "sub",
      href: "/html/semantica/etiquetas-html-de-texto/#etiquetas-html-de-modificacin-de-significado",
    },
    {
      abbr: "Sup",
      name: "sup",
      href: "/html/semantica/etiquetas-html-de-texto/#etiquetas-html-de-modificacin-de-significado",
    },
    {
      abbr: "I",
      name: "i",
      href: "/html/semantica/etiquetas-html-de-texto/#etiquetas-html-para-fragmentos-de-texto",
    },
    {
      abbr: "B",
      name: "b",
      href: "/html/semantica/etiquetas-html-de-texto/#etiquetas-html-para-fragmentos-de-texto",
    },
    {
      abbr: "U",
      name: "u",
      href: "/html/semantica/etiquetas-html-de-texto/#etiquetas-html-para-fragmentos-de-texto",
    },
    {
      abbr: "Mk",
      name: "mark",
      href: "/html/semantica/etiquetas-html-de-texto/#etiquetas-html-para-fragmentos-de-texto",
    },
    {
      abbr: "Sp",
      name: "span",
      href: "/html/semantica/etiquetas-html-de-texto/#etiquetas-html-para-fragmentos-de-texto",
    },
    {
      abbr: "Br",
      name: "br",
      href: "/html/semantica/etiquetas-html-de-texto/#etiquetas-html-de-modificacin-de-significado",
    },
    {
      abbr: "Wbr",
      name: "wbr",
      href: "/html/semantica/etiquetas-html-de-texto/#etiquetas-html-de-modificacin-de-significado",
    },
    { abbr: "Img", name: "img", href: "/html/multimedia/etiquetas-html-de-imagenes/" },
    { abbr: "Pic", name: "picture", href: "/html/multimedia/etiquetas-html-de-imagenes/" },
    {
      abbr: "Ifr",
      name: "iframe",
      href: "/html/multimedia/etiquetas-html-de-contenido-externo/#etiquetas-html-para-contenido-externo",
    },
    {
      abbr: "Emb",
      name: "embed",
      href: "/html/multimedia/etiquetas-html-de-contenido-externo/#etiquetas-html-para-contenido-externo",
    },
    {
      abbr: "Obj",
      name: "object",
      href: "/html/multimedia/etiquetas-html-de-contenido-externo/#etiquetas-html-para-contenido-externo",
    },
    {
      abbr: "Par",
      name: "param",
      href: "/html/multimedia/etiquetas-html-de-contenido-externo/#etiquetas-html-para-contenido-externo",
    },
    { abbr: "Vi", name: "video", href: "/html/multimedia/etiquetas-html-de-video/" },
    { abbr: "Au", name: "audio", href: "/html/multimedia/etiquetas-html-de-audio/" },
    { abbr: "Src", name: "source", href: "/html/multimedia/etiquetas-html-de-video/" },
    { abbr: "Trk", name: "track", href: "/html/multimedia/etiquetas-html-de-subtitulos/" },
    { abbr: "Map", name: "map", href: "/html/semantica/enlaces-o-hipervinculos/" },
    { abbr: "Ar", name: "area", href: "/html/semantica/enlaces-o-hipervinculos/" },
    { abbr: "Tb", name: "table", href: "/html/semantica/etiquetas-html-de-tablas/" },
    { abbr: "Cap", name: "caption", href: "/html/semantica/etiquetas-html-de-tablas/" },
    { abbr: "Cg", name: "colgroup", href: "/html/semantica/etiquetas-html-de-tablas/" },
    { abbr: "Col", name: "col", href: "/html/semantica/etiquetas-html-de-tablas/" },
    { abbr: "TBd", name: "tbody", href: "/html/semantica/etiquetas-html-de-tablas/" },
    { abbr: "THd", name: "thead", href: "/html/semantica/etiquetas-html-de-tablas/" },
    { abbr: "TFt", name: "tfoot", href: "/html/semantica/etiquetas-html-de-tablas/" },
    { abbr: "Tr", name: "tr", href: "/html/semantica/etiquetas-html-de-tablas/" },
    { abbr: "Th", name: "th", href: "/html/semantica/etiquetas-html-de-tablas/" },
    { abbr: "Td", name: "td", href: "/html/semantica/etiquetas-html-de-tablas/" },
    { abbr: "Frm", name: "form", href: "/html/formularios/crear-un-formulario/" },
    { abbr: "Lab", name: "label", href: "/html/formularios/crear-un-formulario/" },
    { abbr: "In", name: "input", href: "/html/formularios/controles-campos-de-texto/" },
    { abbr: "But", name: "button", href: "/html/formularios/botones-de-envio-de-formulario/" },
    { abbr: "Sel", name: "select", href: "/html/formularios/controles-listas-de-seleccion/" },
    { abbr: "Dtl", name: "datalist", href: "/html/formularios/controles-listas-de-seleccion/" },
    { abbr: "Og", name: "optgroup", href: "/html/formularios/controles-listas-de-seleccion/" },
    { abbr: "O", name: "option", href: "/html/formularios/controles-listas-de-seleccion/" },
    {
      abbr: "Ta",
      name: "textarea",
      href: "/html/formularios/controles-campos-de-texto/#campos-extensos-de-texto",
    },
    { abbr: "Out", name: "output", href: "/html/semantica/etiquetas-html-de-texto/" },
    {
      abbr: "Prg",
      name: "progress",
      href: "/html/formularios/medidores-y-barras-de-progreso/",
    },
    { abbr: "Met", name: "meter", href: "/html/formularios/medidores-y-barras-de-progreso/" },
    { abbr: "Fs", name: "fieldset", href: "/html/formularios/organizacion-de-campos/" },
    { abbr: "Le", name: "legend", href: "/html/formularios/organizacion-de-campos/" },
    { abbr: "Sc", name: "script", href: "/html/scripting/etiquetas-html-scripts/" },
    {
      abbr: "NSc",
      name: "noscript",
      href: "/html/scripting/etiquetas-html-scripts/#la-etiqueta-noscript",
    },
    {
      abbr: "Tp",
      name: "template",
      href: "https://lenguajejs.com/webcomponents/nativos/plantillas-dom-componente/#acceso-mediante-templates",
    },
    { abbr: "Sl", name: "slot", href: "https://lenguajejs.com/webcomponents/nativos/slots/" },
    { abbr: "Cv", name: "canvas", href: "/html/scripting/etiquetas-html-interactivas/" },
    { abbr: "Det", name: "details", href: "/html/scripting/etiquetas-html-interactivas/" },
    { abbr: "Sum", name: "summary", href: "/html/scripting/etiquetas-html-interactivas/" },
    { abbr: "Dia", name: "dialog", href: "/html/scripting/etiquetas-html-interactivas/" },
  ],
  semantics: [
    { abbr: "Art", name: "article", href: "/html/semantica/etiquetas-html-de-seccion/" },
    { abbr: "Sec", name: "section", href: "/html/semantica/etiquetas-html-de-seccion/" },
    { abbr: "Nav", name: "nav", href: "/html/semantica/etiquetas-html-de-seccion/" },
    { abbr: "h1", name: "h1", href: "/html/semantica/etiquetas-html-de-seccion/" },
    { abbr: "h2", name: "h2", href: "/html/semantica/etiquetas-html-de-seccion/" },
    { abbr: "h3", name: "h3", href: "/html/semantica/etiquetas-html-de-seccion/" },
    { abbr: "h4", name: "h4", href: "/html/semantica/etiquetas-html-de-seccion/" },
    { abbr: "h5", name: "h5", href: "/html/semantica/etiquetas-html-de-seccion/" },
    { abbr: "h6", name: "h6", href: "/html/semantica/etiquetas-html-de-seccion/" },
    { abbr: "Hdr", name: "header", href: "/html/semantica/etiquetas-html-de-seccion/" },
    { abbr: "Ftr", name: "footer", href: "/html/semantica/etiquetas-html-de-seccion/" },
    { abbr: "Asd", name: "aside", href: "/html/semantica/etiquetas-html-de-seccion/" },
    { abbr: "Add", name: "address", href: "/html/semantica/etiquetas-html-de-seccion/" },
    { abbr: "Rub", name: "ruby", href: "#" },
    { abbr: "Rb", name: "rb", href: "#" },
    { abbr: "Rt", name: "rt", href: "#" },
    { abbr: "Rtc", name: "rtc", href: "#" },
    { abbr: "Rp", name: "rp", href: "#" },
    { abbr: "Bdi", name: "bdi", href: "#" },
    { abbr: "Bdo", name: "bdo", href: "#" },
    {
      abbr: "Ins",
      name: "ins",
      href: "/html/semantica/etiquetas-html-de-texto/#etiquetas-html-de-edicin",
    },
    {
      abbr: "Del",
      name: "del",
      href: "/html/semantica/etiquetas-html-de-texto/#etiquetas-html-de-edicin",
    },
  ],
  deprecated: [
    { abbr: "App", name: "applet", href: "/html/semantica/etiquetas-html-obsoletas/" },
    { abbr: "Acr", name: "acronym", href: "/html/semantica/etiquetas-html-obsoletas/" },
    { abbr: "Fr", name: "frame", href: "/html/semantica/etiquetas-html-obsoletas/" },
    { abbr: "Frs", name: "frameset", href: "/html/semantica/etiquetas-html-obsoletas/" },
    { abbr: "NFr", name: "noframe", href: "/html/semantica/etiquetas-html-obsoletas/" },
    { abbr: "Fnt", name: "font", href: "/html/semantica/etiquetas-html-obsoletas/" },
    { abbr: "Big", name: "big", href: "/html/semantica/etiquetas-html-obsoletas/" },
    { abbr: "Blk", name: "blink", href: "/html/semantica/etiquetas-html-obsoletas/" },
    { abbr: "Cen", name: "center", href: "/html/semantica/etiquetas-html-obsoletas/" },
    { abbr: "Mrq", name: "marquee", href: "/html/semantica/etiquetas-html-obsoletas/" },
  ],
};

export default class PeriodicTable extends HTMLElement {
  constructor() {
    super();
    this.attachShadow({ mode: "open" });
    this.render();
  }

  get styles() {
    return `
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
        grid-gap: 77px;
        margin-top: 50px;
      }

      .semantics {
        display: grid;
        grid-template-rows: repeat(2, 1fr);
        grid-template-columns: repeat(11, 1fr);
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
        (item, index) =>
          `<periodic-element num="${index + 1}" abbr="${item.abbr}"
                             name="${item.name}" href="${item.href}">
           </periodic-element>`
      )
      .join("");
  }

  get semantics() {
    return DATA.semantics
      .map(
        (item, index) =>
          `<periodic-element num="${index + 91}" abbr="${item.abbr}"
    name="${item.name}" href="${item.href}"></periodic-element>`
      )
      .join("");
  }

  get deprecated() {
    return DATA.deprecated
      .map(
        (item, index) => `<periodic-element num="${index + 113}" abbr="${item.abbr}"
    name="${item.name}" href="${item.href}"></periodic-element>`
      )
      .join("");
  }

  render() {
    this.shadowRoot.innerHTML = `
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
