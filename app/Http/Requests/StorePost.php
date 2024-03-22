<?php

namespace App\Http\Requests;


use App\Models\Post;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StorePost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // $post = Post::find($this->id);
        // return $post->user_id == Auth::id();
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>['required','min:10'],
            'body'=>['required'],
            'enabled'=>['nullable', 'boolean'], 
            'published_at'=>['required'],
            'image'=>['nullable', 'image'],
        ];
    }

    public function attributes(): array
    {
        return [
            'enabled' => 'enabled (status)',
            'published_at' => 'published at'
        ];
    }
}
