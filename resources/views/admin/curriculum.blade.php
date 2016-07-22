<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CV</title>
     {!!Html::style('http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css')!!}
     {!!Html::style('css/cv.css')!!}

    
</head>
<body>
<?php 
       $id= $user;
        //$mail => Auth::user()->mail;
       
        $works = DB::select('select * from works where user_id= ?', [$id]);
        $academics = DB::select('select * from academics where user_id = ?', [$id]);
        $students = DB::select('select * from students where user_id = ?', [$id]);
        $profiles = DB::select('select * from profiles where user_id = ?', [$id]);
        
        ?>
<div id="doc2" class="yui-t7">
    <div id="inner">
        <?php
            foreach($students as $student):
        ?>
        <div id="hd">
            <div class="yui-gc">
                <div class="yui-u first">
                    <h1>{{$student->name}} {{$student->last_name}}</h1>
                    <h2>{{$student->title}}</h2>
                </div>

                <div class="yui-u">
                    <div class="contact-info">
                        <h4>Número telefonico</h4>
                        <h2>{{$student->phone}}</h2>
                        <?php foreach($profiles as $profile): ?>
                        <img src="<?php echo url('/profiles', [$profile->image]); ?>" alt="" width="150" height="100">
                    <?php endforeach ?>
                    </div><!--// .contact-info -->
                </div>
            </div><!--// .yui-gc -->
        </div><!--// hd -->
         <?php
            endforeach
        ?>
        <div id="bd">
            <div id="yui-main">
                <div class="yui-b">
                    <?php
                        foreach($students as $student):
                    ?>
                    <div class="yui-gf">
                        <div class="yui-u first">
                            <h2>Perfil profesional</h2>
                        </div>
                        <div class="yui-u">
                            <p class="enlarge">
                                {{$student->description}}
                            </p>
                        </div>
                    </div><!--// .yui-gf -->
                    <?php
                        endforeach
                    ?>
                    <!--
                    <div class="yui-gf">
                        <div class="yui-u first">
                            <h2>Skills</h2>
                        </div>
                        <div class="yui-u">

                                <div class="talent">
                                    <h2>Web Design</h2>
                                    <p>Assertively exploit wireless initiatives rather than synergistic core competencies.  </p>
                                </div>

                                <div class="talent">
                                    <h2>Interface Design</h2>
                                    <p>Credibly streamline mission-critical value with multifunctional functionalities.  </p>
                                </div>

                                <div class="talent">
                                    <h2>Project Direction</h2>
                                    <p>Proven ability to lead and manage a wide variety of design and development projects in team and independent situations.</p>
                                </div>
                        </div>
                    </div><!--// .yui-gf -->
                
                    <!--<div class="yui-gf">
                        <div class="yui-u first">
                            <h2>Technical</h2>
                        </div>
                        <div class="yui-u">
                            <ul class="talent">
                                <li>XHTML</li>
                                <li>CSS</li>
                                <li class="last">Javascript</li>
                            </ul>

                            <ul class="talent">
                                <li>Jquery</li>
                                <li>PHP</li>
                                <li class="last">CVS / Subversion</li>
                            </ul>

                            <ul class="talent">
                                <li>OS X</li>
                                <li>Windows XP/Vista</li>
                                <li class="last">Linux</li>
                            </ul>
                        </div>
                    </div><!--// .yui-gf-->

                    <div class="yui-gf">
    
                        <div class="yui-u first">
                            <h2>Experiencia laboral</h2>
                        </div><!--// .yui-u -->

                        <div class="yui-u">
                            <?php
                                foreach($works as $work):
                            ?>
                            <div class="job">
                                <h2>{{$work->company}}</h2>
                                <h3>{{$work->position}}</h3>
                                <h4>{{$work->period}}</h4>
                                <p>{{$work->description}}</p>
                            </div>
                            <?php
                                endforeach
                            ?>
                        </div><!--// .yui-u -->
                    </div><!--// .yui-gf -->
                     <?php
                        foreach($academics as $academic):
                     ?>
                    
                    <div class="yui-gf last">
                        <div class="yui-u first">
                            <h2>Educación</h2>
                        </div>
                        <div class="yui-u">
                            <h2>{{$academic->name_posgrado}}</h2>
                            <h3>{{$academic->school_posgrado}}</h3>
                            <br>
                            <h3>{{$academic->name_university}}</h3>
                            <h3>{{$academic->school_university}}</h3>
                        </div>
                    </div><!--// .yui-gf -->

                    <?php
                        endforeach
                     ?>
                </div><!--// .yui-b -->
            </div><!--// yui-main -->
        </div><!--// bd -->
        <?php
            foreach($students as $student):
        ?>
        <div id="ft">
            <p>{{$student->name}} {{$student->last_name}} &mdash; {{$student->phone}}</p>
        </div><!--// footer -->
        <?php
            endforeach
        ?>
        <div id="ft">
        <a href="{{ url('/home')}}">Regresar</a>
        </div>
    </div><!-- // inner -->


</div><!--// doc -->
    
</body>
</html>