<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nebrija</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            img {
                width: 40%;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <img src="data:image/png;base64,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" alt="" srcset="" >
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="http://127.0.0.1:8000/api/estudio" class="underline text-gray-900 dark:text-white">Estudio</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Chequea nuestra consulta de estudios
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="http://127.0.0.1:8000/api/profesor" class="underline text-gray-900 dark:text-white">Profesor</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Chequea nuestra consulta de profesores
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="http://127.0.0.1:8000/api/asignatura" class="underline text-gray-900 dark:text-white">Asignatura</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Chequea nuestra consulta de asignatura
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="http://127.0.0.1:8000/api/profesor-asignatura" class="underline text-gray-900 dark:text-white">Profesor Asignatura</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Chequea nuestra consulta de profesor asignatura
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Autor: José Vázquez
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
