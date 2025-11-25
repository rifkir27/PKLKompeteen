<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tool;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tools = [
            'Visual Studio Code',
            'PHP',
            'Laravel',
            'MySQL',
            'Git',
            'Composer',
            'Node.js',
            'NPM',
            'HTML/CSS',
            'JavaScript',
            'Python',
            'Java',
            'C++',
            'React',
            'Vue.js',
            'Angular',
            'Docker',
            'Postman',
            'Figma',
            'Adobe Photoshop',
            'Adobe Illustrator',
            'Microsoft Office',
            'Google Workspace',
            'Slack',
            'Zoom',
            'VS Code Extensions',
            'Browser DevTools',
            'Command Line/Terminal',
            'Database Management Tool',
            'API Testing Tool'
        ];

        foreach ($tools as $tool) {
            Tool::create(['name' => $tool]);
        }
    }
}
