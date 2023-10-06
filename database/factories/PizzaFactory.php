<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pizza>
 */
class PizzaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $toppings = [
            'Cogumelos',
            'Cebola',
            'Azeitonas',
            'Tomate',
            'Pimentão',
            'Pimenta',
            'Abacaxi',
            'Presunto',
            'Bacon',
            'Pepperoni',
            'Frango',
            'Catupiry',
            'Cheddar',
            'Parmesão',
        ];

        $selectedToppings = [];

        for ($i = 0; $i < rand(1, 5); $i++) {
            $selectedToppings[] = Arr::random($toppings);
        }

        return [
            'id' => rand(11111, 99999),
            'name' => Arr::random(['Margherita','Pepperoni', 'Quatro Queijos', 'Calabresa', 'Frango com Catupiry', 'Vegetariana']),
            'user_id' => rand(1, 10),
            'size' => Arr::random(['Pequena', 'Média', 'Grande']),
            'crust' => Arr::random(['Fina', 'Grossa', 'Recheada']),
            'status' => Arr::random(['Pendente', 'Em preparo', 'Pronta', 'Entregue']),
            'toppings' =>  $selectedToppings,
        ];
    }
}
