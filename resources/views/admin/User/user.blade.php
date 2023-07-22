<x-app-layout>
    <div class="container mt-5">
      @if (\Session::has('success'))
      <div class="alert alert-success">
          <ul>
              <li>{!! \Session::get('success') !!}</li>
          </ul>
      </div>
    @endif
      {!! $dataTable->table(['class' => 'w-100'], true) !!}
      {{ $dataTable->scripts() }}
    </div>

  
</x-app-layout>
