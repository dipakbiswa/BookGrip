<x-app-layout>
    <main class="h-full overflow-y-auto">
      @section('title', "Description Formatter")
        <div class="container px-6 mx-auto grid">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Description Formatter
          </h2>
          
          <!-- Cards with title -->
          {{-- <center><h4
          class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
        >
        Upgrade Your Plan and Get the Most Out of BookGrip
        </h4></center> --}}
        <hr>
        <br>
        
        <div class="grid gap-6 mb-8 md:grid-cols-2">


          <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <form action="{{ route("description-formatter.post") }}" method="POST">
              @csrf
              <center>
                <input type="text" name="title" value="{{ old("title") }}" placeholder="Title" class="text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
              </center><br>
              <textarea id="editor1" name="editor1" class="text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                @isset($data)
                  {{-- {!!html_entity_decode($data)!!} --}}
                  {!! $data !!}
                @endisset
              </textarea>
              <br>
              <input class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="submit" value="Update Preview">
            </form>
            <br>
            @isset($data)
              <p class="my-1 text-s font-semibold text-gray-700 dark:text-gray-200">Select Cover:&nbsp;<input type="file" onchange="loadFile(event)" name="link" value="{{old("link")}}" accept="image/*" class="text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"></p>
            @endisset
            
            
          </div>


          <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <h3 class="my-2 text-xl font-semibold text-gray-700 dark:text-gray-200">Description Source Code</h3>
            <textarea name="" id="myInput" cols="69" rows="5" class="text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" disabled>
              @isset($data)
                {{$data}}
              @endisset
            </textarea>  
            <button onclick="copy()" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Copy</button>
          </div>


        </div>

        <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-white-800">
          <center>
          <div class="row">
            <div class="column1">
              <img src="https://bookgrip.com/api/photo/amazon-preview/3.png" style="height:350px" id="output">
              <br>
              <img src="https://bookgrip.com/api/photo/amazon-preview/1.png" style="height:125px">
                
            </div>
          </center>
            <div class="column2">
              <span style="font-size: 24px; color: black; font-weight: 400;">
                @isset($title)
                  {!! $title !!}
                @else 
                  Your book title
                @endisset 
              </span><br>
              <span style="font-size: 20px; color: #595959;">Paperback – October 20, 2016</span>
              <p style="font-size: 14px;">by <span style="color: blue;">{{auth()->user()->name}}</span> (Author)</p>
              <img src="https://bookgrip.com/api/photo/amazon-preview/2.png" style="height:125px">
              <br>
              <p>
                @isset($data)
                  {{-- {!!html_entity_decode($data)!!} --}}
                  {!! $data !!}
                @else 
                  Your description here
                @endisset
              </p>
              <br>
            </div>
          </div>
          
        
        </div>

        <br>

    </main>
    <script>
      CKEDITOR.replace( 'editor1' );  
      function copy() {
        // Get the text field
        var copyText = document.getElementById("myInput");

        // Select the text field
        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices

        // Copy the text inside the text field
        navigator.clipboard.writeText(copyText.value);

        // Alert the copied text
        alert("Text copied");
      } 
      var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
          URL.revokeObjectURL(output.src) // free memory
        }
      }; 
    </script>
    <style>
      .column1 {
        float: left;
        width: 40%;
      }
      .column2 {
        float: right;
        width: 60%;
      }
    </style>
</x-app-layout>
