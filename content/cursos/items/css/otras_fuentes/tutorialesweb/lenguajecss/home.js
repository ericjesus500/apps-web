let s;addEventListener("keydown",(e=>{const t=e.key.toLowerCase(),c=e.ctrlKey&&e.altKey&&"q"===t,o=document.body.classList.contains("quack");if(c&&(e.preventDefault(),document.body.classList.contains("quack")||(s=new Audio("/assets/sounds/quack.ogg"),s.play()),!o)){document.body.classList.add("quack");const s='<a class="topic" href="https://quackscript.com/" title="QuackScript">\n        <svg class="logo"><use href="/assets/logos/qs.svg#qs"></use></svg>\n      </a>';document.querySelector(".list").insertAdjacentHTML("beforeend",s)}}));