 <button class='btn btn-danger'
     onclick="event.preventDefault(); document.getElementById('destroy-form{{ $d->id }}').submit();">
     <i class="bi bi-trash3"></i>
 </button>
 <form id="destroy-form{{ $d->id }}" action="{{ route('kalkulator-destroy', $d->id) }}" method="POST"
     class="d-none">
     @csrf
 </form>
