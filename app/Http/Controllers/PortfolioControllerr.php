<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioControllerr extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Aldrich Naag',
            'role' => 'Web Developer',
            'phone' => '+(63) 9991864321',
            'email' => 'aldrichhcirdla27@gmail.com',
            'description' => 'My name is Aldrich Naag, a Bachelor of Science in Information Technology student at Global Reciprocal Colleges. I specialize in web development and have experience working on real-time web application projects. I’m currently seeking internship opportunities to enhance my practical skills and gain industry experience. I’m passionate about learning new technologies, exploring innovative projects, and contributing to meaningful work. I continuously develop my skills through side projects and staying updated with the latest in web development.',
            'profilePic' => 'my-avatar.png',
            'logo' => 'logo.png',
            'isiahprof' => 'avatar-4.png',
            'macinasProf' => 'avatar-1.png',

            'recommendation' => [
                'Isiah Carl Dizon' => 'I had the pleasure of working with aldrich on a web development project. aldrich is a dedicated and talented developer who consistently impressed the team with their commitment to excellence. Their strong understanding of web technologies, coupled with their passion for learning, made them an invaluable asset to the project. I would highly recommend aldrich for any web development position or project.',
                'Michael Macinas' => 'Working with aldrich was a fantastic experience. aldrich is not only a skilled developer but also a great team player. They were always willing to go the extra mile to ensure that the project met its objectives. His ability to quickly grasp new concepts and their eagerness to take on challenges make them an ideal candidate for any web development team.'
            ],

            'skills' => [
                'b1' => 'Proficient in web development technologies including HTML, CSS, JavaScript, and framework React.js',
                'b2' => 'Familiarity with version control systems like Git and collaboration platforms like GitHub.',
                'b3' => 'Strong understanding of the full web development life cycle.',
                'b4' => 'Collaborating with UI/UX designers and software testers to ensure the functionality and usability of web applications.',
                'b5' => 'Identifying and rectifying bugs to maintain application quality and responsiveness.',
                'b6' => 'Proficient in problem-solving and eager to take on new challenges in web development.'
            ],
        ];

        return view('portfolio.index', $data);
    }
}
