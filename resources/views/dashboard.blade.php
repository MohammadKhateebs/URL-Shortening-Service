<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0" style="font-size: 25px;">
                            Short url
                            <br>
                            <div>
                                <h4>
                                    @if(session('message'))
                                    {!! session('message')!!}
                                    @endif
                                </h4>
                            </div>
                        </div>
                        <hr>

                        <form class="row g-3" method="POST" action="{{route('short')}}">
                            @csrf


                            <div class="col-auto">
                                <label for="inputurl" class="visually-hidden">Url</label>
                                <input type="url" class="form-control" name="url_short"  placeholder="URL">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary text-dark mb-3" onclick="location.reload();" >Short the url</button>
                            </div>

                        </form>
                        <a href="{{ route('user.links') }}" class="btn btn-outline-dark" id="id">your links</a>
                </div>
                @yield('links')
            </div>

        </div>

    </div>
</x-app-layout>
