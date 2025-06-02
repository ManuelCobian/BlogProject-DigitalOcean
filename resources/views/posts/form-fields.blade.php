<div>

    <x-input-label for="title" :value="__('Title')" />
    <x-text-input 
    id="title" 
    name="title" 
    type="text" 
    value="{{old('title', $post->title)}}" 
    class="w-full mt-1 block" />
   
    <x-input-error :messages="$errors->get('title')" class="mt-2" />

</div>
<div>
    <x-input-label for="body" :value="__('Body')" />
    <x-textarea class="w-full mt-1 block" name="body" id="body">{{old('body', $post->body)}}</x-textarea>
    <x-input-error :messages="$errors->get('body')" class="mt-2" />

</div>