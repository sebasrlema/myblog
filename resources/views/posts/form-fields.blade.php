<div>

    <x-input-label for="title" :value=" __('Title')" />
    <x-text-input id="title"
                  name="title"
                  class="block w-full mt-1"
                  type="text"
                  value="{{old('title', $post->title)}}" />
    <x-input-error :messages="$errors->get('title')" class="mt-2" />
</div>
<label>
    <x-input-label for="body" :value="__('body')" />
    <x-textarea-input id="body"
                      class="block w-full mt-1"
                      name="body">{{old('title', $post->body)}}</x-textarea-input>
    <x-input-error :messages="$errors->get('body')" class="mt-2"/>
</label> <br/>



