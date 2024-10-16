<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Useraccount> <-- this one
 */
class UseraccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed> <-- this one
     */
    public function definition(): array
    {
        return [
            //'transaction_title string', 'description string' , 'status enum', 'total_amount float', 'transaction_number integer',

            'transaction_title'=>fake()->sentence(1),
            'description'=>fake()->paragraph(),
            'status'=>fake()->randomElement(['successful','declined']),
            'total_amount'=>fake()->randomFloat(),
            'transaction_number'=>fake()->unique()->randomNumber(),
        ];
    }
}

// namespace Database\Factories;

// use App\Models\Useraccount; // <-- add
// use Illuminate\Database\Eloquent\Factories\Factory;

// //  * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Useraccount> <-- this?

// class UseraccountFactory extends Factory
// {
//     protected $model = Useraccount::class; // <-- add

//     /**
//      * Define the model's default state.
//      *
//      * @return array<string, mixed>
//      *
//      */

//     public function definition(): array
//     {
//         return [
//             'name' => fake()->name(),
//         ];
//     }
// }
