<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <title>CIS-Foundation</title>
</head>
<body class="w-full h-full">


    <div class="flex w-screen h-screen">
        <div class="bg-gray-800 h-full">
            <div class="text-gray-50 mx-auto text-center py-5 text-xl"><span class="font-extrabold">CIS</span>-Foundation</div>
            <x-menu slug="main"/>
        </div>
        <div class="w-full">
            <div class="p-4 bg-slate-700 text-slate-50 space-x-2 flex items-center">
                <form action="{{ route("auth.logout") }}" method="POST">
                    @csrf
                    <button type="submit" class="text-red-400"><i class="fa fa-sign-out"></i> Abmelden</button>
                </form>
                <i class="fa-solid fa-ellipsis-vertical px-2"></i>
                <i class="fa fa-user-circle"></i>
                <span>Willkommen, {{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</span>
            </div>
            @yield("content")
        </div>
    </div>

</body>
</html>
