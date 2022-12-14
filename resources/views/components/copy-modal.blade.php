    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade z-10 fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
<div class="modal-dialog fixed z-10 inset-0 overflow-y-auto">
<div
class="modal-content ml-auto mr-auto bg-white rounded-lg text-center overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full">
<div
  class="modal-header  flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
  <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">Copy Link to Form</h5>
  <button type="button"
    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
    data-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body relative p-4">
  Link
  <input wire:model="url"/>
</div>
<div
  class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
  <button type="button" class="px-6
    py-2.5
    bg-purple-600
    text-white
    font-medium
    text-xs
    leading-tight
    uppercase
    rounded
    shadow-md
    hover:bg-purple-700 hover:shadow-lg
    focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0
    active:bg-purple-800 active:shadow-lg
    transition
    duration-150
    ease-in-out" data-dismiss="modal">Close</button>
  <button type="button" wire:click="delete" class="px-6
py-2.5
bg-red-600
text-white
font-medium
text-xs
leading-tight
uppercase
rounded
shadow-md
hover:bg-red-700 hover:shadow-lg
focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0
active:bg-red-800 active:shadow-lg
transition
duration-150
ease-in-out
ml-1" >Delete</button>
</div>
</div>
</div>
</div>