<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vendas</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
            
            table{
                text-align: center;
            }
            th{
                padding: 4px;
            }
            input{
                border: 1px solid #1b1b1b;
                border-radius: 4px;
            }
            h1{
                font-size: 20px;
                font-weight: bold;
            }
            div{
                margin: auto;
                background-color: #e5e7eb;
                border-radius: 7px;
                padding: 20px;
                margin: 40px;

            }
        </style>
    </head>
    <body class="font-sans antialiased"><!--dark:bg-black dark:text-white/50">-->
        <div>
            <h1>Cliente</h1>
            <label for="clientes">Cliente:</label>

            <select name="clientes" id="clientes">
                @foreach ($clientes as $key => $value)
                    <option value="{{$value->id}}">{{$value->nome_completo}}</option>
                @endforeach
            </select>
            <button id="adicionarCliente" class="btn btn-primary" onclick="addCliente()">adicionar cliente</button>

            <p id="codigoCliente">Codigo: </p>
            <p id="nomeCliente">Nome completo: </p>
            
        </div>
        <!--Form para selecionar produto-->
        <div>
            <h1>Produto</h1>
            <label for="produtos">Produto:</label>

            <select name="produtos" id="produtos">
                @foreach ($produtos as $key => $value)
                    <option value="{{$value->id}}">{{$value->descricao}}</option>
                @endforeach
            </select>
            <label for ="quantidadeProdutos">Quantidade:</label>
            <input name="quantidadeProdutos" id="quantidadeProdutos" type="number" value="1" min="1"/>
            <button id="adicionarProduto" class="btn btn-primary" onclick="addProduto()">adicionar produto</button>
            <table id="listaProdutos">
                <thead>
                    <tr>
                        <th>codigo</th>
                        <th>descricao</th>
                        <th>quantidade</th>
                        <th>valor unidade</th>
                        <th>total</th>
                        <th>ações</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <div>
            <h1>Pagamento</h1>
            
            <label for="tipoPagamentos">Tipo de pagamento:</label>
            <select name="tipoPagamentos" id="tipoPagamentos" onchange="seleTipoPagamento()">
                @foreach ($tipoPagamentos as $key => $value)
                    <option value="{{$value->id}}">{{$value->nome}}</option>
                @endforeach
            </select>
            <br/>
            <label for ="qtParcelas">Quantidade:</label>
            <input id="qtParcelas" name="qtParcelas" type="number" min="1" value="1"/>

            <button id="gerarParcelas" onclick="gerarParcelas()" class="btn btn-primary">Gerar Parcelas</button>
            <table id="listaParcelas">
                <thead>
                    <tr>
                        <th>codigo</th>
                        <th>vencimento</th>
                        <th>valor</th>
                        <th>ações</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            
        </div>
        <div>
            <button  class="btn btn-primary" onclick="cadastrarVenda()">Cadastrar Venda</button>
        </div>
        <div>
            <h1>Editar Parcela</h1>
            <div id="container-editar-parcela">
                <table>
                    <tr>
                        <td><label for="codigoParcela">numero parcela:</label></td>
                        <td><input name="codigoParcela" id="codigoParcela" type="text" readonly="readonly"/></td>
                    </tr>
                    <tr>
                        <td><label for="vencimentoParcela">vencimento:</label></td>
                        <td><input name="vencimentoParcela" id="vencimentoParcela" type="date"/></td>
                    </tr>
                    <tr>
                        <td><label for="valorParcela">valor:</label></td>
                        <td><input name="valorParcela" id="valorParcela" type="text" onkeyup="verificarValor(this)" /></td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-primary" id="editarParcelaCancelar">Cancelar</button></td>
                        <td><button class="btn btn-primary" id="editarParcelaSalvar">Salvar</button></td>
                    </tr>
            </table>
            </div>
        </div>

        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script>
            let produtos ={!! json_encode($produtos) !!};
            
            let listaProdutos = document.getElementById("listaProdutos").getElementsByTagName('tbody')[0];
            let listaParcelas = document.getElementById("listaParcelas").getElementsByTagName('tbody')[0];

            let dadosVenda = {
                "codigoCliente":null,
                "produtos": [],
                "valorTotal": 0,
                "pagamento": {
                    "codigo": document.getElementById("tipoPagamentos").value,
                    "qtParcelas": document.getElementById("qtParcelas").value,
                    "parcelas":[]
                }
            }
            console.log(dadosVenda)

            function verificarValor(e){
                let valor = e.value;
                let numeros = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '.'];

                for (let i = 0; i < valor.length; i++) {
                let letra = valor.substring(i, i+1);
                    if (numeros.includes(letra) == false) {
                        valor = valor.slice(0,i);
                        break;
                    }
                }
                e.value = valor;
            }

            function converterDataParaIso(data){
                let valores = data.split("/")
                return valores[2]+"-"+valores[1]+"-"+valores[0]
            }
            function converterDataParaPadrao(data){
                let valores = data.split("-")
                return valores[2]+"/"+valores[1]+"/"+valores[0]
            }
            
            function editarParcela(indice,linha, codigoCell, vencimentoCell, valorCell){
                let codigoParcela = document.getElementById("codigoParcela")
                let vencimentoParcela = document.getElementById("vencimentoParcela")
                let valorParcela = document.getElementById("valorParcela")
                let btnSalvar = document.getElementById("editarParcelaSalvar")
                
                console.log(indice)

                codigoParcela.value = codigoCell.innerText;
                vencimentoParcela.value = converterDataParaIso(vencimentoCell.innerText);
                valorParcela.value = valorCell.innerText;
                btnSalvar.onclick = function (){
                    salvarParcela(btnSalvar, indice, linha, codigoCell, vencimentoCell, valorCell)
                }
            }

            function salvarParcela(btnSalvar,indice,linha, codigoCell, vencimentoCell, valorCell){
                let codigoParcela = document.getElementById("codigoParcela")
                let vencimentoParcela = document.getElementById("vencimentoParcela")
                let valorParcela = document.getElementById("valorParcela")
                let novoVencimento = new Date(vencimentoParcela.value)

                if(indice>0){

                    if(indice==dadosVenda.pagamento.parcelas.length-1){
                        let vencimentoInferior = new Date(dadosVenda.pagamento.parcelas[indice-1].vencimento)
                        if(vencimentoInferior > novoVencimento){
                            alert("data escolhida muito baixa!")
                            return
                        }
                    }else{
                        let vencimentoInferior = new Date(dadosVenda.pagamento.parcelas[indice-1].vencimento)
                        let vencimentoSuperior = new Date(dadosVenda.pagamento.parcelas[indice+1].vencimento)
                        if(vencimentoInferior > novoVencimento){
                            alert("data escolhida muito baixa!")
                            return
                        }
                        if(vencimentoSuperior < novoVencimento){
                            alert("data escolhida muito alta!")
                            return
                        }
                    }
                }    
                else{
                    let vencimentoInferior = new Date()
                    let vencimentoSuperior = new Date(dadosVenda.pagamento.parcelas[indice+1].vencimento)
                    if(vencimentoInferior > novoVencimento){
                        alert("data escolhida muito baixa!")
                        return
                    }
                    if(vencimentoSuperior < novoVencimento){
                        alert("data escolhida muito alta!")
                        return
                    }
                }

                vencimentoCell.innerText = converterDataParaPadrao(vencimentoParcela.value)
                dadosVenda.pagamento.parcelas[indice].vencimento = vencimentoParcela.value
                //valorCell.innerText = valorParcela.value
                //dadosVenda.pagamento.parcelas[indice].valor = parseFloat(valorParcela.value)
                
                redistribuirValores(indice,parseFloat(valorParcela.value))

                console.log(dadosVenda)
                btnSalvar.removeAttribute("onclick")
            }

            function redistribuirValores(indice,valorAlterado) {
                let soma = 0;
                const total = dadosVenda.valorTotal
                const qtParcelas = dadosVenda.pagamento.qtParcelas
                let media = total/qtParcelas;

                let diferenca = valorAlterado-dadosVenda.pagamento.parcelas[indice].valor
                dadosVenda.pagamento.parcelas[indice].valor = valorAlterado
                let valorRedistribuido = 0;
                
                if(diferenca!=0){
                    valorRedistribuido = -(diferenca/(qtParcelas-1))
                    console.log("valorRedistribuido: "+valorRedistribuido)
                }else{
                    return
                }
                
                for(let i = 0; i < qtParcelas;i++){
                    if(indice !=i){
                        dadosVenda.pagamento.parcelas[i].valor += valorRedistribuido
                    }
                    listaParcelas.rows[i].cells[2].innerText = dadosVenda.pagamento.parcelas[i].valor
                }
            }

            function seleTipoPagamento(){
                dadosVenda.pagamento.codigo = document.getElementById("tipoPagamentos").value
                console.log(dadosVenda)
            }
            
            function addProduto(){
                let selecionado = document.getElementById("produtos");
                let codigo = selecionado.value;
                let descricao = selecionado.options[selecionado.selectedIndex].text;
                let quantidade = document.getElementById("quantidadeProdutos").value;
                let valor = 0;
                
                for(let i=0;i < produtos.length;i++){
                    if(produtos[i].id == codigo){
                        valor = produtos[i].valor;
                        i = produtos.length+1;
                    }
                }

                let novaLinha = listaProdutos.insertRow();

                let codigoCell = novaLinha.insertCell();
                let descricaoCell = novaLinha.insertCell();
                let quantidaCell = novaLinha.insertCell();
                let valorCell = novaLinha.insertCell();
                let totalCell = novaLinha.insertCell();
                let acoesCell = novaLinha.insertCell();
                let btnExcluir = document.createElement("button");

                btnExcluir.innerText = "remover";
                
                let totalProduto = valor*quantidade
                dadosVenda.valorTotal += totalProduto

                btnExcluir.onclick= function (){
                    dadosVenda.valorTotal -= totalProduto
                    dadosVenda.produtos.splice(novaLinha.rowIndex-1,1)
                    listaProdutos.deleteRow(novaLinha.rowIndex-1)
                    gerarParcelas()
                }
                btnExcluir.classList.add("btn")
                btnExcluir.classList.add("btn-primary")

                codigoCell.appendChild(document.createTextNode(codigo));
                descricaoCell.appendChild(document.createTextNode(descricao));
                quantidaCell.appendChild(document.createTextNode(quantidade));
                valorCell.appendChild(document.createTextNode(valor));
                
                totalCell.appendChild(document.createTextNode(totalProduto));
                
                dadosVenda.produtos.push({
                    "codigo": codigo,
                    "quantidade": quantidade,
                    "valor": valor,
                    "totalProduto": totalProduto
                })
                gerarParcelas()

                acoesCell.appendChild(btnExcluir);
            }

            function addCliente(){
                let selecionado= document.getElementById("clientes");
                let pCodigo = document.getElementById("codigoCliente");
                let pNome = document.getElementById("nomeCliente");

                let codigo = selecionado.value;
                let nome = selecionado.options[selecionado.selectedIndex].text;

                dadosVenda.codigoCliente = codigo;
                pCodigo.innerText = "Codigo: "+codigo;
                pNome.innerText = "Nome completo: "+nome;
                console.log(dadosVenda)
            }

            function gerarParcelas(){
                if(dadosVenda.valorTotal==0){
                    alert("selecione um produto!");
                    return;
                }
                let qtParcelas = document.getElementById("qtParcelas").value;
                
                listaParcelas.innerText = ""
                dadosVenda.pagamento.parcelas = []
                dadosVenda.pagamento.qtParcelas = qtParcelas
                let valorParcela = dadosVenda.valorTotal/qtParcelas
                
                for(let i=0;i<qtParcelas;i++)
                {   
                    let hoje = new Date();
                    let vencimento = new Date(hoje.setMonth(hoje.getMonth() + 1 + i));
                    let novaLinha = listaParcelas.insertRow();

                    let codigoCell = novaLinha.insertCell();
                    let vencimentoCell = novaLinha.insertCell();
                    let valorCell = novaLinha.insertCell();
                    let acoesCell = novaLinha.insertCell();
                    let btnEditar = document.createElement("button");
                    btnEditar.innerText = "editar";

                    btnEditar.onclick= function (){
                        editarParcela(novaLinha.rowIndex-1,novaLinha, codigoCell, vencimentoCell, valorCell)
                    }
                    btnEditar.classList.add("btn")
                    btnEditar.classList.add("btn-primary")

                    codigoCell.appendChild(document.createTextNode(novaLinha.rowIndex));
                    vencimentoCell.appendChild(document.createTextNode(vencimento.toLocaleDateString()));
                    valorCell.appendChild(document.createTextNode(valorParcela));
                    acoesCell.appendChild(btnEditar);
                    dadosVenda.pagamento.parcelas.push({
                        "vencimento":vencimento.toISOString().split('T')[0],
                        "valor": valorParcela
                    })
                }
                console.log(dadosVenda)
            }


            async function cadastrarVenda(){
                if(dadosVenda.codigoCliente == null){
                    alert("selecione um cliente!")
                    return
                }
                if(dadosVenda.produtos.length == 0){
                    alert("selecione pelo menos um produto")
                    return
                }
                
                const {data} = await axios.post("{!! route('venda.index') !!}", dadosVenda, {
                    headers: {
                    'Content-Type': 'multipart/form-data'
                    }
                }
                )
                
                console.log(JSON.stringify(data))

            }
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
    </body>
</html>
