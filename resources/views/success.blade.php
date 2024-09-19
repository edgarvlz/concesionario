 <!-- Mensajes de sesión -->
 @if (session('success'))
 <div class="mb-4 p-4 bg-green-100 text-green-700 border border-green-300 rounded-md">
     {{ session('success') }}
 </div>
@endif
