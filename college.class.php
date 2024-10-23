//CLASES

class Estudiantes{
    public $nombre;
    public $apellido;
    public $rut;
    public $direccion;
    private $ano;
    private $asignaturas[];
    private $actividadExtra;
}
class Apoderado extends Estudiantes{
    public $nombreEstudiante;
}
class Asignaturas{
    public $nombreAsignatura;
    public $docente;
    public $horario;
    public $idAsignatura;
}

//CONSTRUCTORES
public Function constructor($nombre, $apellido, $rut, $direccion, $ano, $asignaturas, $actividadExtra){
    $this->nombre=$nombre;
    $this->apellido=$apellido;
    $this->rut=$rut;
    $this->direccion=$direccion;
    $this->ano=$ano;
    $this->asignaturas=$asignaturas;
    $this->actividadExtra=$actividadExtra;
}

public Function constructorAP($nombre, $apellido, $rut, $direccion, $estudiante){
    $this->nombre=$nombre;
    $this->apellido=$apellido;
    $this->rut=$rut;
    $this->direccion=$direccion;
    $this->estudiante=$estudiante;
}

public Function constructorAS($nombre, $docente, $horario, $idAsignatura){
    $this->nombre=$nombre;
    $this->docente=$docente;
    $this->horario=$horario;
    $this->idAsignatura=$idAsignatura;
}

//CREACION EJEMPLOS
Estudiante estudiante1 = new Estudiante(“nombre”,”apellido”, “rut”, “direccion”, “ano”, Asignaturas[], “Actividad Extra”);
Apoderado apoderado1 = new Apoderado(“nombreAp”,”apellidoAp”, “rut”, “direccion”,””,””,””, “Estudiante1”);
Asignatura asignatura1 = new Asignatura(“nombre”, “profesor”, “horario”, “ID-Asignatura”);