<?php

namespace App\Http\Requests;

use App\Models\Post;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $postId = $this->route('id');
        $post = Post::find($postId);

        return $post && $post->user_id === Auth::id();
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'min:10'],
            'body' => ['required'],
            'enabled' => ['nullable', 'boolean'],
            'published_at' => ['required'],
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
