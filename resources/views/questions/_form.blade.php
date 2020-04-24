 @csrf


                    <div class="form-group">
                        <label for="question-title"> Question Title</label>
                        <input type="text" name="title" value="{{ old('title',$question->title)}}" id="question-title"  class="form-control {{ $errors->has('title') ? 'is-invalid':'' }}" placeholder="">

                        @if ($errors->has('title'))
                        <div class="invalid-feedback">
                            <strong> {{ $errors->first('title') }}</strong>
                            
                        </div>


                        @endif
                        
                    </div>

                    <div class="form-group">
                        <label for="question-body"> Explain you question</label>
                        <textarea  name="body" value="" id="question-body"  class="form-control {{ $errors->has('body') ? 'is-invalid':'' }}" placeholder="" rows="10">{{ old('body',$question->body)}}</textarea>

                        @if ($errors->has('body'))
                        <div class="invalid-feedback">
                            <strong> {{ $errors->first('body') }}</strong>
                            
                        </div>


                        @endif
                        
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-primary btn-lg">{{ $buttonText }}</button>
                        
                    </div>