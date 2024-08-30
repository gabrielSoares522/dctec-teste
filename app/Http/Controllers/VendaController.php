<?php

namespace App\Http\Controllers;

use App\Models\Item_venda;
use App\Models\Pagamento;
use App\Models\Parcela;
use Illuminate\Http\Request;
use App\Models\Venda;
use Eloquent;

class VendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendas = \App\Models\Venda::all();
        
        return view("listaVendas",[
            'vendas'=>$vendas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = \App\Models\Cliente::all();
        $produtos = \App\Models\Produto::all();
        $tipoPagamentos = \App\Models\Tipo_pagamento::all();
        
        return view("cadastroVenda",[
            'clientes'=>$clientes,
            'produtos'=>$produtos,
            'tipoPagamentos'=>$tipoPagamentos
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*
        {
            "codigoCliente":"1",
            "produtos":[
                {
                    "codigo":"1",
                    "quantidade":"1",
                    "valor":"12",
                    "totalProduto":"12"
                }
            ],
            "valorTotal":"12",
            "pagamento":{
                "codigo":"1",
                "qtParcelas":"1",
                "parcelas":[
                    {
                        "vencimento":"2024-09-30",
                        "valor":"12"
                    }
                ]
            }
        }
        */
        $pagamento = new Pagamento;
        $pagamento->total = $request->valorTotal;
        $pagamento->qt_parcelas = $request->pagamento["qtParcelas"];
        $pagamento->id_tipo_pagamento = $request->pagamento["codigo"];
        $pagamento->save();

        $venda = new Venda;
        $venda->id_pagamento = $pagamento->id;
        $venda->id_cliente = $request->codigoCliente;
        $venda->dt_venda = date('Y-m-d H:i:s');
        $venda->save();

        foreach($request->produtos as $key => $value){
            $itemVenda = new Item_venda;
            $itemVenda->id_produto = $value["codigo"];
            $itemVenda->id_venda = $venda->id;
            $itemVenda->quantidade = $value["quantidade"];
            $itemVenda->save();
        }

        foreach($request->pagamento["parcelas"] as $key => $value){
            $parcela = new Parcela;
            $parcela->id_pagamento = $pagamento->id;
            $parcela->valor = $value["valor"];
            $parcela->vencimento = $value["vencimento"];
            $parcela->save();
        }
        return "concluido";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
