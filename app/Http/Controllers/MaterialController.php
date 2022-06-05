<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{

    public function index(Request $request)
    {
        $materiais = Material::paginate(30); //Material::all();

        $search = $request->search;
        $materiais = Material::where(function ($query) use ($search) {
            if($search){
                $query->where('tipo_material','LIKE', "%$search%")
                ->orwhere('name','LIKE', "%{$search}%");
            }
        })->orderBy('id')->get();
        return View('admin.material.index')->with('materiais',$materiais);
    }


    public function create()
    {
        return view('admin.material.create');
    }


    public function store(Request $request)
    {
        Material::create($request->all());
        return redirect("material");
    }


    public function show(Material $material)
    {
        return view('admin.material.show')->with('materiais',$material); 
    }


    public function edit(Material $material)
    {
        return view('admin.material.edit')->with('material',$material); 
    }


    public function update(Request $request, Material $material)
    {
        $material->update( $request->all());        
        return redirect('material');
    }

  
    public function destroy(Material $material)
    {
        $material->delete();
        return redirect('material');
    }
}
/*
<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;
use App\Http\Requests\DepartamentoRequest;

class DepartamentoController extends Controller
{

    public function index()
    {
        $departamentos = Departamento::paginate(3); //Departamento::all();
        return View('departamento.index')->with('nomeVarView',$departamentos);
    }

    public function create()
    {
        return View('departamento.create');
    }

    public function store(DepartamentoRequest $request)
    {

        Departamento::create( $request->all() );

        return redirect("/departamento");

    }

    public function edit(Departamento $departamento)
    {
        return View('departamento.edit')->with('dep',$departamento);
    }


    public function update(DepartamentoRequest $request, Departamento $departamento)
    {

        $departamento->update(  $request->all()  );

        return redirect('/departamento');
    }

    public function show(Departamento $departamento)
    {
        return View('departamento.show')->with('dep',$departamento);
    }


    public function destroy(Departamento $departamento)
    {
        $departamento->delete();

        return redirect('/departamento');
    }
}

*/