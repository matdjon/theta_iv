## Laravel Assessment for Theta Edge

Overall, there are 10 main tasks for the assessment. And the recommended time is to finish in 12 hours. So far, I have done the third part only which is creating the CRUD for blog post. And that is not even finished as I've done only the create and read part.

As for part 1 and 2, the laravel project initializer already built the authentication part, as the laravel starket kit automatically built that part if the breeze and blade starter kit is selected. [1] Hence, don't reinvent the wheel.

As for other parts, well I underestimated the learning curve, even if I already grasped the architecture of MVC that is used both by Laravel and Ruby on Rails. The part that took most of my time is understanding how the blade files insert another layout/files to the current view/html aka the use of partial.
Unfortunately the assessment is not completed.

[1] https://laravel.com/docs/10.x/starter-kits

## Project Setup

1. Clone the repo.
2. Create the database. `php artisan migrate`
3. Seed the blogposts. `php artisan tinker` then in the psy shell run `\App\Models\BlogPost::factory()->times(10)->create();`
4. Start the server. `php artisan serve`
5. Head to register page and create a temporary account.
6. Login.
7. Head to the blogpost page from the top navbar.
