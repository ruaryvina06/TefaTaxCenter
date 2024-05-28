 <button class='btn btn-primary' onclick="event.preventDefault(); document.getElementById('trancate-form').submit();">
     Reset Data
 </button>
 <form id="trancate-form" action="{{ route('kalkulator-trancate') }}" method="POST" class="d-none">
     @csrf
 </form>
