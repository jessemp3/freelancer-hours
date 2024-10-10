<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\projects>
 */
class ProjectsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array

    {


        // dd(
        //     htmlspecialchars(fake()->randomHtml())
        // );

        return [


            'title' => collect(fake()->words(5))->join(' '),

            'description' => fake()->randomHtml(),

            'ends_at' => fake()->dateTimeBetween('now' , '+ 3 days'),

            'status' => fake()->randomElement(['open' , 'closed']),

            'tech_stack'=> fake()->randomElements(['React' , 'Php' ,
            'Laravel' , 'vue' , 'tailwind' , 'javascript' , 'nextJs' ,
            'Python' , 'Node' , 'Sass' , 'Style-Components' , 'Pandas' ,
            'Bulma' , 'TypeScript' ] , random_int(1,5) ),

            'created_by'=> User::factory(),
        ];
    }
}
