@php
    $item = App\Models\Interior::find($id);
@endphp
<x-app-layout>
    @section('title', "Create Books")
    <main class="h-full overflow-y-auto">
        <div class="container px-6 mx-auto grid">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            {{ $item->name }}
          </h2>
          
        @if(($item->free == 0 and auth()->user()->is_paid == 1) or ($item->free == 1))

        @if($id != 202)
          <!-- CTA -->
          <div class="grid gap-6 mb-8 md:grid-cols-2">
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <center>
                <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200">
                    Create {{ $item->name }}
                </h2>
                <form method="post" action="{{ route('create.pdf.post') }}" class="mt-6 space-y-6">
                    @csrf
                  <!-- Invalid input -->
                  <label class="block text-sm">
                    <div>
                        <x-input-label class="text-gray-600 dark:text-gray-400" for="name" :value="__('Name')" />
                        <x-text-input id="name" name="name" type="text" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input" required autofocus autocomplete="name" />
                        <x-input-error class="text-red-600" :messages="$errors->get('name')" />
                    </div>
                  </label>
                  <br>
                  <label class="block text-sm">
                    <div>
                        <x-input-label class="text-gray-600 dark:text-gray-400" for="name" :value="__('Number of pages')" />
                        <x-text-input id="name" name="number" type="number" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input" required autofocus autocomplete="number" />
                        <x-input-error class="text-red-600" :messages="$errors->get('number')" />
                    </div>
                  </label>
                  <br>
                  <label class="block text-sm">
                    <div>
                        <x-input-label class="text-gray-600 dark:text-gray-400" for="name" :value="__('Size')" />
                        <select id="name" name="size" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input">
                            <option value="A3">A3</option>
                            <option value="A4">A4</option>
                            <option value="A5">A5</option>
                            <option value="Letter">Letter</option>
                            <option value="Legal">Legal</option>
                        </select>
                    </div>
                </label>
                  @if (($id == 1))
                    <br>
                    <label class="block text-sm">
                        <div>
                            <x-input-label class="text-gray-600 dark:text-gray-400" for="name" :value="__('Orientation')" />
                            <select id="name" name="orientation" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input">
                                <option value="P">Portrait</option>
                                <option value="L">Landscape</option>
                            </select>
                        </div>
                    </label>
                    <br>
                    <br>
                    {{-- <label class="block text-sm">
                        <div>
                            <x-input-label class="text-gray-600 dark:text-gray-400" for="name" :value="__('Size')" />
                            <select id="name" name="size" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input">
                                <option value="A3">A3</option>
                                <option value="A4">A4</option>
                                <option value="A5">A5</option>
                                <option value="Letter">Letter</option>
                                <option value="Legal">Legal</option>
                            </select>
                        </div>
                    </label> --}}
                    <br>
                  @endif


                  @if (($id == 3) or ($id == 4) or ($id == 5) or ($id == 6) or ($id == 34) or ($id == 35) or ($id == 36) or ($id == 37) or ($id == 38) or ($id == 39))
                    <br>
                    <label class="block text-sm">
                        <div>
                            <x-input-label class="text-gray-600 dark:text-gray-400" for="name" :value="__('Size')" />
                            <select id="name" name="size" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input">
                                <option value="A4">A4</option>
                                <option value="Letter">Letter</option>
                                <option value="Legal">Legal</option>
                            </select>
                        </div>
                    </label>
                    <br>
                  @endif
                  
                  {{-- Heart mazes algorithem --}}
                    @if (($id == 20))
                        <br>
                        <label class="block text-sm">
                            <div>
                                <x-input-label class="text-gray-600 dark:text-gray-400" for="name" :value="__('Algorithm')" />
                                <select id="name" name="algorithm" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input">
                                    <option value="kruskal">Kruskal</option>
                                    <option value="prism">Prism</option>
                                    <option value="recursive">Recursive</option>
                                    <option value="wilson">Wilson</option>
                                </select>
                            </div>
                        </label>
                        <br>
                    @endif
                  {{-- Heart mazes algorithem --}}

                    {{-- Extream wave mazes --}}
                    @if (($id == 18))
                    <br>
                    <label class="block text-sm">
                        <div>
                            <x-input-label class="text-gray-600 dark:text-gray-400" for="name" :value="__('Type')" />
                            <select id="name" name="type" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input">
                                <option value="curly">Curly Weave</option>
                                <option value="straight">Straight Weave</option>
                            </select>
                        </div>
                    </label>
                    <br>
                    @endif
                    {{-- Extream wave mazes --}}

                    {{-- cross mazes --}}
                    @if (($id == 17))
                    <br>
                    <label class="block text-sm">
                        <div>
                            <x-input-label class="text-gray-600 dark:text-gray-400" for="name" :value="__('Difficulty')" />
                            <select id="name" name="difficulty" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input">
                                <option value="easy">Easy</option>
                                <option value="medium">Medium</option>
                                <option value="hard">Hard</option>
                                <option value="extreme">Extreme</option>
                            </select>
                        </div>
                    </label>
                    <br>
                    @endif
                    {{-- cross mazes --}}

                    {{-- square tringular circular hexagonal mazes --}}
                    @if (($id == 14) or ($id == 21) or ($id == 15) or ($id == 23))
                    <br>
                    <label class="block text-sm">
                        <div>
                            <x-input-label class="text-gray-600 dark:text-gray-400" for="name" :value="__('Difficulty')" />
                            <select id="name" name="difficulty" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input">
                                <option value="easy">Easy</option>
                                <option value="medium">Medium</option>
                                <option value="hard">Hard</option>
                            </select>
                        </div>
                    </label>
                    <br>
                    @endif
                    {{-- square tringular circular hexagonal mazes --}}

                    {{-- Math --}}
                    @if (($id == 40) or ($id == 41) or ($id == 42))
                    <br>
                    <div>
                        <x-input-label class="text-gray-600 dark:text-gray-400" for="title" :value="__('Title')" />
                        <x-text-input id="title" name="title" type="text" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input" required autofocus autocomplete="title" />
                        <x-input-error class="text-red-600" :messages="$errors->get('title')" />
                    </div>
                    <br>
                    <label class="block text-sm">
                        <div>
                            <x-input-label class="text-gray-600 dark:text-gray-400" for="name" :value="__('Difficulty')" />
                            <select id="name" name="difficulty" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input">
                                <option value="easy">Easy</option>
                                <option value="medium">Medium</option>
                                <option value="hard">Hard</option>
                            </select>
                        </div>
                    </label>
                    <br>
                    <label class="block text-sm">
                        <div>
                            <x-input-label class="text-gray-600 dark:text-gray-400" for="name" :value="__('Problem Type')" />
                            <select id="name" name="problem" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input">
                                <option value="+">Addition (+)</option>
                                <option value="-">Subtraction (-)</option>
                                <option value="*">Multiplication (*)</option>
                                <option value="/">Division (÷)</option>
                                <option value="both">Both Addition (+) and Subtraction (-)</option>
                            </select>
                        </div>
                    </label>
                    <br>
                    @endif
                    {{-- Math --}}

                    {{-- Riddle --}}
                    @if($id == 203)
                    <br>
                    <label class="block text-sm">
                        <div>
                            <x-input-label class="text-gray-600 dark:text-gray-400" for="font" :value="__('Font')" />
                            <select id="font" name="font" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input">
                                <option value="arial">Arial</option>
                                <option value="comici">Comic Sans MS</option>
                                
                            </select>
                        </div>
                    </label>
                    <br>
                    <label class="block text-sm">
                        <div>
                            <x-input-label class="text-gray-600 dark:text-gray-400" for="font" :value="__('Answer')" />
                            <select id="answer" name="answer" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input">
                                <option value="1">With Answer</option>
                                <option value="0">Without Answer</option>
                            </select>
                        </div>
                    </label>
                    @endif
                    {{-- Riddle --}}

                    {{-- Moral Story --}}
                    @if($id == 204)
                    <br>
                    <label class="block text-sm">
                        <div>
                            <x-input-label class="text-gray-600 dark:text-gray-400" for="font" :value="__('Title Font')" />
                            <select id="font" name="titleFont" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input">
                                <option value="arial">Arial</option>
                                <option value="comici">Comic Sans MS</option>
                                
                            </select>
                            <br>
                            <x-input-label class="text-gray-600 dark:text-gray-400" for="font" :value="__('Title Color')" /> <input type="color" id="favcolor" name="titleColor" value="#ff0000">
                        </div>
                    </label>
                    <br>
                    <label class="block text-sm">
                        <div>
                            <x-input-label class="text-gray-600 dark:text-gray-400" for="font" :value="__('Story Font')" />
                            <select id="font" name="storyFont" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input">
                                <option value="arial">Arial</option>
                                <option value="comici">Comic Sans MS</option>
                                
                            </select>
                            <br>
                            <x-input-label class="text-gray-600 dark:text-gray-400" for="font" :value="__('Story Color')" /> <input type="color" id="favcolor" name="storyColor" value="#ff0000">
                        </div>
                    </label>
                    <br>
                    <label class="block text-sm">
                        <div>
                            <x-input-label class="text-gray-600 dark:text-gray-400" for="font" :value="__('Moral Font')" />
                            <select id="font" name="moralFont" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input">
                                <option value="arial">Arial</option>
                                <option value="comici">Comic Sans MS</option>
                                
                            </select>
                            <br>
                            <x-input-label class="text-gray-600 dark:text-gray-400" for="font" :value="__('Moral Color')" /> <input type="color" id="favcolor" name="moralColor" value="#ff0000">
                        </div>
                    </label>
                    @endif
                    {{-- Moral Story --}}


                    {{-- Quzis --}}
                    @if (($id == 205))
                    <br>
                    <label class="block text-sm">
                        <div>
                            <x-input-label class="text-gray-600 dark:text-gray-400" for="name" :value="__('Difficulty')" />
                            <select id="name" name="difficulty" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input">
                                <option value="easy">Easy</option>
                                <option value="medium">Medium</option>
                                <option value="hard">Hard</option>
                            </select>
                        </div>
                    </label>
                    <br>
                    <label class="block text-sm">
                        <div>
                            <x-input-label class="text-gray-600 dark:text-gray-400" for="name" :value="__('Select Type:')" />
                            <select id="name" name="type" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input">
                                <option value="multiple">Multiple Choice</option>
                                <option value="boolean">True/False</option>
                            </select>
                        </div>
                    </label>
                    <br>
                    @endif
                    {{-- Quzis --}}

                    {{-- Jokes --}}
                    @if ($id == 206)
                        <br>
                        <label class="block text-sm">
                            <div>
                                <x-input-label class="text-gray-600 dark:text-gray-400" for="font" :value="__('Font')" />
                                <select id="font" name="font" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input">
                                    <option value="arial">Arial</option>
                                    <option value="comici">Comic Sans MS</option>
                                    
                                </select>
                                <br>
                                <x-input-label class="text-gray-600 dark:text-gray-400" for="font" :value="__('Text Color')" /> <input type="color" id="favcolor" name="color" value="#ff0000">
                            </div>
                        </label>
                        <br>
                        <label class="block text-sm">
                            <div>
                                <x-input-label class="text-gray-600 dark:text-gray-400" for="font" :value="__('Joke Type')" />
                                <select id="font" name="jokeType" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input">
                                    <option value="general">General</option>
                                    <option value="dad">Dad</option>
                                    <option value="programming">Programming</option>
                                </select>
                                <br>
                            </div>
                        </label>
                    @endif
                    {{-- Jokes --}}
                    


                  <label class="block text-sm">
                    <div>
                        <x-text-input id="name" name="id" type="hidden" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none focus:shadow-outline-red form-input" value="{{ $id }}" required autofocus autocomplete="number" />
                    </div>
                  </label>
                  <br>
                  <x-primary-button type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">{{ __('Create') }}</x-primary-button>
                </form>
                </center>
            </div>

            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                @php
                    $data = App\Models\Interior::find($id);
                @endphp
                <center>
                    <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200">
                        Preview
                    </h2>
                    <img class="h-auto max-w-full rounded-lg" style="border: 2px solid gray; width: 250px;" src="{{ $data->free_image }}" alt="">
                </center>
            </div>
        </div>
        @endif

        @if($id == 202)
            <iframe src="https://wordsearch-bookgrip.netlify.app/" frameborder="0" height="1000px" width="100%" style="border-radius: 20px;"></iframe>
        @endif


        @elseif((auth()->user()->is_paid == 0) and ($item->free == 0))
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <center>
                <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    <span class="material-symbols-outlined">
                        lock
                    </span>
                </h2><br>
                <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200">
                    This template is not available for free user
                </h2><br>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Your current subscription status does not include access to this template. Please upgrade your subscription to keep using the templates and the other powerful BookGrip tools.
                </p><br>
                <a href="{{route('pricing')}}"
                  class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                >
                UPGRADE SUBSCRIPTION
              </a><br><br>
                </center>
            </div>
        @endif

        </div>
    </main>
</x-app-layout>
