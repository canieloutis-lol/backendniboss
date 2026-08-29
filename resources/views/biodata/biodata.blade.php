<div>
@if (empty($nama))
    <h1>selamat datang di halaman biodata</h1>

@else 
    <h1> halo, new member {{ $nama }}! semoga betah</h1>    
@endif    
    
    </div>