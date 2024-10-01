<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Pizza;
use Inertia\Response;
use Illuminate\Http\Request;

class PublicPizzaController extends Controller
{
    public function show(Pizza $pizza) : Response
    {
        return Inertia::render('Pizzas/Show',[
            'pizza' =>$pizza,
        ]);
    }
}
