@extends('layouts.app')

@section('template_title')
    Parentescos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Parentescos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('parentescos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Alumno Fk</th>
									<th >Encargado Fk</th>
									<th >Tipo Parentesco</th>
									<th >Prioridad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($parentescos as $parentesco)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $parentesco->alumno_fk }}</td>
										<td >{{ $parentesco->encargado_fk }}</td>
										<td >{{ $parentesco->tipo_parentesco }}</td>
										<td >{{ $parentesco->prioridad }}</td>

                                            <td>
                                                <form action="{{ route('parentescos.destroy', $parentesco->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('parentescos.show', $parentesco->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('parentescos.edit', $parentesco->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $parentescos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
