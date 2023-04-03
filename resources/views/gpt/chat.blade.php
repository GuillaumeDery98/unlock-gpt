@include('layouts.app');
@section('content')
    <div class="container mx-auto my-8">
        <div class="flex flex-col space-y-4">
            <div class="flex justify-end">
                <div class="bg-green-500 rounded-lg px-4 py-2 text-white max-w-xs">
                    Salut, comment ça va ?
                </div>
            </div>
            <div class="flex justify-start">
                <div class="bg-gray-400 rounded-lg px-4 py-2 text-white max-w-xs">
                    Ça va bien, merci. Et toi ?
                </div>
            </div>
            <div class="flex justify-end">
                <div class="bg-green-500 rounded-lg px-4 py-2 text-white max-w-xs">
                    Très bien, merci !
                </div>
            </div>
        </div>
    </div>
@endsection
