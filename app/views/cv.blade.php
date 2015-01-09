@extends('layouts.main')
@section('title', 'CV')

@section('content')
<div class="flex row">
    <h2 class="title open flex-item"><span class="chevron"></span> Skills</h2>
    <div class="row skill-row flex-item">
     <p>All of the skills I am able to work with. Lorem ipsum dolor sit.</p>
     <ul>
         <li>HTML5</li>
         <li>CSS3</li>
         <li>Javascript</li>
         <li>JQuery</li>
         <li>PHP</li>
     </ul>
     
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <h2 class="title flex-item"><span class="chevron"></span> Education</h2>
     <div class="education flex-item">
         <table>
             <thead>
                 <tr>
                     <th colspan="3">QCF</th>
                </tr>
             </thead>
             <tbody>
                 <tr>
                     <td>2014</td>
                     <td>Business Management NVQ</td>
                     <td class="grade">Level 3</td>
                 </tr>
             </tbody>
             <thead>
                 <tr>
                     <th colspan="3">University of Salford</th>
                </tr>
             </thead>
             <tbody>
                 <tr>
                     <td>2004 - 2008</td>
                     <td>BA (Hons) Popular Music &amp; Recording</td>
                     <td class="grade">2:1</td>
                 </tr>
             </tbody>
             <thead>
                 <tr>
                     <th colspan="3">Lymm High School</th>
                 </tr>
             </thead>
             <tbody>
                 <tr>
                     <td>2001 - 2004</td>
                     <td>A Level Music Technology</td>
                     <td class="grade">C</td>
                 </tr>
                 <tr>
                     <td></td>
                     <td>A Level Physics</td>
                     <td class="grade">C</td>
                 </tr>
                 <tr>
                     <td></td>
                     <td>A Level Media Studies</td>
                     <td class="grade">D</td>
                 </tr>
                 <tr>
                     <td>1996 - 2001</td>
                     <td>9 GCSE's</td>
                     <td class="grade">A-C</td>
                 </tr>
             </tbody>
         </table>
     </div>
    <h2 class="title flex-item"><span class="chevron"></span> Employment</h2>
    <div class="employment flex-item">
     <div class="job">
         <div class="title">
             <h3>June 2012 - Present:</h3>
             <h4>Bakerie Bread and Wine Bar, Manchester</h4>
             <h4>Bar Manager</h4>
         </div>
         <div class="description">
             <ul>
                 <li>Team leader for my own department.</li>
                 <li>People management including recruitment, training and development, and rota planning.</li>
                 <li>Supporting general manager in all aspects of sharing responsibility for the day to day running of the restaurant and bar.</li>
                 <li>Following and implementing financial processes and procedures.</li>
                 <li>Ensuring departments operate inside company standards for quality and service.</li>
                 <li>Continuously working towards improving sales and service.</li>
             </ul>
         </div>
     </div>
     <div class="job">
         <div class="title">
             <h3>September 2007 -  June 2012:</h3>
             <h4>Thirsty Scholar and The Attic, Manchester</h4>
             <h4>Bar Supervisor / Trainee Manager</h4>
         </div>
         <div class="description">
             <ul>
                 <li>Handling customer complaints, resolving any issues.</li>
                 <li>Setting a level of customer service I expect all staff to follow.</li>
                 <li>Responsible for supervising staff according to the demands of the night.</li>
                 <li>Training new members of staff.</li>
             </ul>
         </div>
     </div>
     <div class="job">
         <div class="title">
             <h3>March 2011 - September 2011:</h3>
             <h4>The Deansgate Tavern, Manchester</h4>
             <h4>Bar Supervisor</h4>
         </div>
         <div class="description">
             <ul>
                 <li>Internal transfer position during refurbishment period.</li>
             </ul>
         </div>
     </div>
     <div class="job">
         <div class="title">
             <h3>September 2006 - March 2010:</h3>
             <h4>Jeffery-West, Manchester</h4>
             <h4>Senior Sales Associate</h4>
         </div>
         <div class="description">
             <ul>
                 <li>Displaying an excellent level of customer service for luxury products.</li>
                 <li>Regularly achieving sales targets.</li>
                 <li>Key holder responsibilities.</li>
             </ul>
         </div>
     </div>
     <div class="job">
         <div class="title">
             <h3>August 2005 - December 2007:</h3>
             <h4>Blacka Acoustics</h4>
             <h4>Freelance Sound Engineer</h4>
         </div>
         <div class="description">
             <ul>
                 <li>Being responsible for the setting up and breaking down of all equipment.</li>
                 <li>Was in charge of mixing, microphone placement and time management while maintaining a high standard of sound reinforcement.</li>
             </ul>
         </div>
     </div>
     <div class="job">
         <div class="title">
             <h3>Sep 2003 – Sep 2004:</h3>
             <h4>United Co-op, Village Store, Lymm</h4>
             <h4>Customer Service Assistant, Supervisor</h4>
         </div>
         <div class="description">
             <ul>
             </ul>
         </div>
     </div>
    </div>
</div> 
@stop