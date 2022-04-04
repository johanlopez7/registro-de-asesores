use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate?Database\Eloquent\Model;

class Asesor extends Model {

    use HasFactory;
    protected $fillable = [
        'nombre',
        'cedula',
        'telefono',
        'fecha_de_nacimiento',
        'genero',
        'cliente',
        'sede',
        'usuario_que_registra',
        'edad',
        'activo',
        ]

}