@extends('layouts.app')

@section('template_title')
    Encargados
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Encargados') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('encargados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Dpi</th>
									<th >Nombre1</th>
									<th >Nombre2</th>
									<th >Nombre3</th>
									<th >Apellido1</th>
									<th >Apellido2</th>
									<th >Fecha Nac</th>
									<th >Tel1</th>
									<th >Tel2</th>
									<th >Direcc</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($encargados as $encargado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $encargado->dpi }}</td>
										<td >{{ $encargado->nombre1 }}</td>
										<td >{{ $encargado->nombre2 }}</td>
										<td >{{ $encargado->nombre3 }}</td>
										<td >{{ $encargado->apellido1 }}</td>
										<td >{{ $encargado->apellido2 }}</td>
										<td >{{ $encargado->fecha_nac }}</td>
										<td >{{ $encargado->tel1 }}</td>
										<td >{{ $encargado->tel2 }}</td>
										<td >{{ $encargado->direcc }}</td>

                                            <td>
                                                <form action="{{ route('encargados.destroy', $encargado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('encargados.show', $encargado->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('encargados.edit', $encargado->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $encargados->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
