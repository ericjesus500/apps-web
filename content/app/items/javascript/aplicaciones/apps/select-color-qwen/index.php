<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Paletas de Colores</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        header {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: #2c3e50;
        }

        .description {
            color: #666;
            font-size: 1.1rem;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .input-section {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .input-group {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 20px;
        }

        .input-field {
            flex: 1;
            min-width: 200px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #2c3e50;
        }

        input {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e1e5e9;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        input:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
        }

        .color-preview {
            height: 100px;
            border-radius: 10px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            text-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        }

        .generate-btn {
            background: #3498db;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 600;
        }

        .generate-btn:hover {
            background: #2980b9;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
        }

        .palette {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }

        .color-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .color-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .color-display {
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            text-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        }

        .color-info {
            padding: 15px;
            background: #f8f9fa;
        }

        .color-code {
            font-family: 'Courier New', monospace;
            font-size: 14px;
            margin: 5px 0;
            padding: 5px;
            background: #f1f3f5;
            border-radius: 4px;
            text-align: center;
        }

        .rgb {
            color: #e74c3c;
        }

        .hex {
            color: #27ae60;
        }

        .hsl {
            color: #3498db;
        }

        .copied {
            animation: pulse 0.5s ease;
        }

        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.5; }
            100% { opacity: 1; }
        }

        .error {
            color: #e74c3c;
            text-align: center;
            margin: 20px 0;
            font-weight: 600;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }
            
            .input-group {
                flex-direction: column;
            }
            
            .palette {
                grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Generador de Paletas de Colores</h1>
            <p class="description">Ingresa un color en formato RGB, HEX o HSL y genera una paleta armoniosa de 8 colores. Haz clic en cualquier color para copiar su código hexadecimal.</p>
        </header>

        <section class="input-section">
            <div class="input-group">
                <div class="input-field">
                    <label for="rgb-input">RGB (Ej: 255, 128, 0)</label>
                    <input type="text" id="rgb-input" placeholder="255, 128, 0">
                </div>
                <div class="input-field">
                    <label for="hex-input">HEX (Ej: #FF8000)</label>
                    <input type="text" id="hex-input" placeholder="#FF8000">
                </div>
                <div class="input-field">
                    <label for="hsl-input">HSL (Ej: 30, 100%, 50%)</label>
                    <input type="text" id="hsl-input" placeholder="30, 100%, 50%">
                </div>
            </div>

            <div id="color-preview" class="color-preview">
                Selecciona un color para comenzar
            </div>

            <button id="generate-btn" class="generate-btn">Generar Paleta</button>
            <div id="error-message" class="error"></div>
        </section>

        <section id="palette" class="palette">
            <!-- Los colores de la paleta se generarán aquí -->
        </section>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const rgbInput = document.getElementById('rgb-input');
            const hexInput = document.getElementById('hex-input');
            const hslInput = document.getElementById('hsl-input');
            const colorPreview = document.getElementById('color-preview');
            const generateBtn = document.getElementById('generate-btn');
            const paletteContainer = document.getElementById('palette');
            const errorMessage = document.getElementById('error-message');

            // Funciones de conversión de colores
            function hexToRgb(hex) {
                const shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
                hex = hex.replace(shorthandRegex, (m, r, g, b) => r + r + g + g + b + b);
                const result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
                return result ? {
                    r: parseInt(result[1], 16),
                    g: parseInt(result[2], 16),
                    b: parseInt(result[3], 16)
                } : null;
            }

            function rgbToHex(r, g, b) {
                return '#' + [r, g, b].map(x => {
                    const hex = Math.round(x).toString(16);
                    return hex.length === 1 ? '0' + hex : hex;
                }).join('');
            }

            function rgbToHsl(r, g, b) {
                r /= 255;
                g /= 255;
                b /= 255;
                const max = Math.max(r, g, b);
                const min = Math.min(r, g, b);
                let h, s, l = (max + min) / 2;

                if (max === min) {
                    h = s = 0;
                } else {
                    const d = max - min;
                    s = l > 0.5 ? d / (2 - max - min) : d / (max + min);
                    switch (max) {
                        case r: h = (g - b) / d + (g < b ? 6 : 0); break;
                        case g: h = (b - r) / d + 2; break;
                        case b: h = (r - g) / d + 4; break;
                    }
                    h /= 6;
                }

                return {
                    h: Math.round(h * 360),
                    s: Math.round(s * 100),
                    l: Math.round(l * 100)
                };
            }

            function hslToRgb(h, s, l) {
                h /= 360;
                s /= 100;
                l /= 100;
                let r, g, b;

                if (s === 0) {
                    r = g = b = l;
                } else {
                    const hue2rgb = (p, q, t) => {
                        if (t < 0) t += 1;
                        if (t > 1) t -= 1;
                        if (t < 1/6) return p + (q - p) * 6 * t;
                        if (t < 1/2) return q;
                        if (t < 2/3) return p + (q - p) * (2/3 - t) * 6;
                        return p;
                    };

                    const q = l < 0.5 ? l * (1 + s) : l + s - l * s;
                    const p = 2 * l - q;
                    r = hue2rgb(p, q, h + 1/3);
                    g = hue2rgb(p, q, h);
                    b = hue2rgb(p, q, h - 1/3);
                }

                return {
                    r: Math.round(r * 255),
                    g: Math.round(g * 255),
                    b: Math.round(b * 255)
                };
            }

            function parseRgb(rgbStr) {
                const match = rgbStr.match(/(\d+)\s*,\s*(\d+)\s*,\s*(\d+)/);
                if (match) {
                    return {
                        r: Math.min(255, Math.max(0, parseInt(match[1]))),
                        g: Math.min(255, Math.max(0, parseInt(match[2]))),
                        b: Math.min(255, Math.max(0, parseInt(match[3])))
                    };
                }
                return null;
            }

            function parseHsl(hslStr) {
                const match = hslStr.match(/(\d+)\s*,\s*(\d+)%?\s*,\s*(\d+)%?/);
                if (match) {
                    return {
                        h: Math.min(360, Math.max(0, parseInt(match[1]))),
                        s: Math.min(100, Math.max(0, parseInt(match[2]))),
                        l: Math.min(100, Math.max(0, parseInt(match[3])))
                    };
                }
                return null;
            }

            function parseHex(hexStr) {
                if (hexStr.startsWith('#')) {
                    hexStr = hexStr.substring(1);
                }
                if (hexStr.length === 3) {
                    hexStr = hexStr.split('').map(c => c + c).join('');
                }
                if (hexStr.length === 6) {
                    return hexToRgb('#' + hexStr);
                }
                return null;
            }

            function getColorFromInput() {
                if (rgbInput.value.trim()) {
                    return parseRgb(rgbInput.value.trim());
                } else if (hexInput.value.trim()) {
                    return parseHex(hexInput.value.trim());
                } else if (hslInput.value.trim()) {
                    const hsl = parseHsl(hslInput.value.trim());
                    return hsl ? hslToRgb(hsl.h, hsl.s, hsl.l) : null;
                }
                return null;
            }

            function updatePreview() {
                const color = getColorFromInput();
                if (color) {
                    const hex = rgbToHex(color.r, color.g, color.b);
                    const hsl = rgbToHsl(color.r, color.g, color.b);
                    
                    colorPreview.style.backgroundColor = hex;
                    colorPreview.textContent = `Preview: ${hex}`;
                    
                    errorMessage.textContent = '';
                } else {
                    colorPreview.style.backgroundColor = '#f1f3f5';
                    colorPreview.textContent = 'Selecciona un color válido para comenzar';
                    errorMessage.textContent = '';
                }
            }

            function generatePalette(baseColor) {
                const palette = [];
                const hsl = rgbToHsl(baseColor.r, baseColor.g, baseColor.b);
                
                // Generar variaciones del color base
                const hues = [hsl.h, (hsl.h + 30) % 360, (hsl.h + 60) % 360, (hsl.h + 180) % 360];
                const saturations = [hsl.s, Math.max(30, hsl.s - 20), Math.min(100, hsl.s + 20)];
                const lightnesses = [Math.max(20, hsl.l - 30), Math.max(40, hsl.l - 15), hsl.l, Math.min(80, hsl.l + 15), Math.min(90, hsl.l + 30)];
                
                // Crear combinaciones
                for (let i = 0; i < 8; i++) {
                    let hue, saturation, lightness;
                    
                    switch (i) {
                        case 0:
                            hue = hsl.h;
                            saturation = hsl.s;
                            lightness = Math.max(20, hsl.l - 30);
                            break;
                        case 1:
                            hue = hsl.h;
                            saturation = hsl.s;
                            lightness = Math.max(40, hsl.l - 15);
                            break;
                        case 2:
                            hue = hsl.h;
                            saturation = hsl.s;
                            lightness = hsl.l;
                            break;
                        case 3:
                            hue = hsl.h;
                            saturation = hsl.s;
                            lightness = Math.min(80, hsl.l + 15);
                            break;
                        case 4:
                            hue = hsl.h;
                            saturation = hsl.s;
                            lightness = Math.min(90, hsl.l + 30);
                            break;
                        case 5:
                            hue = (hsl.h + 30) % 360;
                            saturation = hsl.s;
                            lightness = hsl.l;
                            break;
                        case 6:
                            hue = (hsl.h + 60) % 360;
                            saturation = hsl.s;
                            lightness = hsl.l;
                            break;
                        case 7:
                            hue = (hsl.h + 180) % 360;
                            saturation = hsl.s;
                            lightness = hsl.l;
                            break;
                    }
                    
                    const rgb = hslToRgb(hue, saturation, lightness);
                    const hex = rgbToHex(rgb.r, rgb.g, rgb.b);
                    
                    palette.push({
                        rgb: `rgb(${rgb.r}, ${rgb.g}, ${rgb.b})`,
                        hex: hex,
                        hsl: `hsl(${Math.round(hue)}, ${saturation}%, ${lightness}%)`,
                        color: rgb
                    });
                }
                
                return palette;
            }

            function renderPalette(palette) {
                paletteContainer.innerHTML = '';
                
                palette.forEach(colorObj => {
                    const card = document.createElement('div');
                    card.className = 'color-card';
                    card.setAttribute('data-hex', colorObj.hex);
                    
                    card.innerHTML = `
                        <div class="color-display" style="background-color: ${colorObj.hex}">
                            ${colorObj.hex}
                        </div>
                        <div class="color-info">
                            <div class="color-code rgb">${colorObj.rgb}</div>
                            <div class="color-code hex">${colorObj.hex}</div>
                            <div class="color-code hsl">${colorObj.hsl}</div>
                        </div>
                    `;
                    
                    card.addEventListener('click', function() {
                        navigator.clipboard.writeText(colorObj.hex).then(() => {
                            card.classList.add('copied');
                            setTimeout(() => {
                                card.classList.remove('copied');
                            }, 500);
                        }).catch(err => {
                            console.error('Error al copiar: ', err);
                        });
                    });
                    
                    paletteContainer.appendChild(card);
                });
            }

            // Event listeners
            rgbInput.addEventListener('input', updatePreview);
            hexInput.addEventListener('input', updatePreview);
            hslInput.addEventListener('input', updatePreview);

            generateBtn.addEventListener('click', function() {
                const color = getColorFromInput();
                if (color) {
                    const palette = generatePalette(color);
                    renderPalette(palette);
                    errorMessage.textContent = '';
                } else {
                    errorMessage.textContent = 'Por favor, ingresa un color válido en alguno de los formatos (RGB, HEX o HSL)';
                    paletteContainer.innerHTML = '';
                }
            });

            // Inicializar
            updatePreview();
        });
    </script>
</body>
</html>