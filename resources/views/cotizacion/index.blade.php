<!DOCTYPE html>
<html>
<head>
    <title>Búsqueda de Cotización</title>
    <link rel="stylesheet" 
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h2 class="mb-4">Buscar Cotización Médica</h2>

    <form method="POST" action="{{ route('cotizacion.buscar') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Número de Cotización</label>
            <input type="number" name="quotation_id" class="form-control" required>
        </div>

        <button class="btn btn-primary">Buscar</button>
    </form>

    <hr>

    @isset($data)
        @if(count($data) == 0)
            <div class="alert alert-danger mt-3">No se encontró información.</div>
        @else
            <h4 class="mt-4">Resultados</h4>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Paciente</th>
                        <th>Identificación</th>
                        <th>Profesional</th>
                        <th>Fecha</th>
                        <th>Hora Inicio</th>
                        <th>Hora Fin</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr>
                        <td>{{ $item->patient_first_name }} {{ $item->patient_last_name }}</td>
                        <td>{{ $item->patient_identification }}</td>
                        <td>{{ $item->doctor_first_name }} {{ $item->doctor_last_name }}</td>
                        <td>{{ $item->init_date }}</td>
                        <td>{{ $item->init_time }}</td>
                        <td>{{ $item->end_time }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    @endisset

</div>

</body>
</html>
