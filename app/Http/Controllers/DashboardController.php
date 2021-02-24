<?php


namespace App\Http\Controllers;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    // Atsinaujinus iš gito ir atlikus duomenų bazės migraciją reikalingi šie veiksmai:
        // Kiekvieną dalį atkomentuoti ir perkrauti puslapį. Tuomet į duomanų bazę įrašomos roles bei leidimai.
            // 1 dalis
            //   Permission::create(['name'=>'all']);
            //   Role::create(['name'=>'admin']);
            // 2 dalis
            //    Permission::create(['name'=>'buy_products']);
            //    Role::create(['name'=>'user']);
        // Toliau atliekame šiuos veiksmus:
            // Surandame rolę pagal id iš duomenų bazės ir jai priskiriame leidimą atkomentuodami šias dvis eilutes
            // $role = Role::findById(1);
            // $role->givePermissionTo('all');
        // Toliau atliekame šiuos veiksmus:
        // $role = Role::findById(2);
        // $role->givePermissionTo('buy_products');
        // Jei viskas suveikė, tuomet atkomentuojame šias eilutes:
            // auth()->user()->assignRole('user');
            // auth()->user()->givePermissionTo('buy_products');
        // Pagal default nustatymus naujas narys bus user ir turės leidimą buy_products
        // Norint padaryti administratoriumi, reikės tai atlikti duomenų bazėje.
        return view('dashboard');
    }
}
