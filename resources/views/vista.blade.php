<h1>Hola estoy realizando un PDF con DOMPDF</h1>

<?php 
        $id = Auth::user()->id;
        $works = DB::select('select * from works where user_id= ?', [$id]);
        $academics = DB::select('select * from academics where user_id = ?', [$id]);
        foreach($works as $work):
      
        ?>
        <table class="table">
            <tr>
            <!-- On rows -->
            <th class="warning">Empresa</th>
            <th class="success">Giro</th>
            <th class="danger">Puesto</th>
            <th class="success">Area</th>
            <th class="warning">Descripción</th>
            </tr>
            <tr>
            <!-- On cells 'td' or 'th' -->
            <td>{{$work->company}}</td>
            <td>{{$work->turn}}</td>
            <td>{{$work->position}}</td>
            <td>{{$work->area}}</td>
            <td>{{$work->description}}</td>
            </tr>
        </table>
        <?php endforeach ?>
        <?php
        foreach($academics as $academic):
      
        ?>
        <table class="table">
            <tr>
            <!-- On rows -->
            <th class="warning">Escuela</th>
            <th class="success">nivel</th>
            <th class="danger">estado</th>
            <th class="success">idioma</th>
            </tr>
            <tr>
            <!-- On cells 'td' or 'th' -->
            <td>{{$academic->school}}</td>
            <td>{{$academic->level}}</td>
            <td>{{$academic->status}}</td>
            <td>{{$academic->language}}</td>
            </tr>
        </table>
        <?php endforeach ?>