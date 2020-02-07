<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('user', 'UserController');
Route::resource('role', 'RoleController');
Route::resource('roleuser', 'RoleUserController');
/*
$user= User::find(1);
$user->tasks()->attach('Aquí id task',['menu_id'=>'id menu', 'status'=>true]);

class Materia extends Eloquent
{
    public function alumnos()
    {
        return $this->belongsToMany(‘Alumno’, 'id_alumno');
    }
}

class Alumno extends Eloquent
{
    public function materias()
    {
        return $this->belongsToMany(‘Materia’, 'id_materia');
    }
}

* Ahora, tenemos la materia con el id 2, y un alumno con el id 3 que se quiere inscribir en esa materia, pero el registro no se agrega ni en materias, ni alumnos, se agrega en la tabla materia_alumno, que no existe ese modelo, lo que existen son las relaciones.

* Para agregarlo usamos attach que es el método que agrega la relación en la tabla materia_alumno.

$materia = Materia::find(2); //La materia en la se inscribió;
$materia->alumnos()->attach(3) //A la relación, le agregamos el id del alumno, que es el 3.
* Entonces eso lo que hace es agregar en la tabla materia_alumno una fila con el id_materia 2 y el id_alumno 3.

* Ahora, el alumno no quiere cursar más la materia entonces hay que quitar la relación, es exactamente lo mismo pero en vez de usar attach, que es para agregar, usamos detach, que es para eliminar.

$materia = Materia::find(2); //La materia en la se inscribió;
$materia->alumnos()->detach(3) //Eliminamos la relacion con ese alumno.
* Y con eso eliminamos el registro en la tabla materia_alumno que habíamos creado antes.
* para poder ligar N alumnos a una materia se debe utilizar sync():

$materia = Materia::find(2); //La materia en la se inscribió;
$materia->alumnos()->sync(array(1, 2, 3, 4)); // Se ligan los alumnos 1, 2, 3 y 4 a la materia
* para desligar N alumnos a una materia se debe utilizar syncWithoutDetaching();
$materia = Materia::find(2);
$user->roles()->syncWithoutDetaching([1, 2, 3,4]); // se desligan los alumnos 1, 2, 3 y 4 a la materia
*/
