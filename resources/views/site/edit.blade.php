<select name="status_id">
                <option> - Escolha o Status - </option>
                @foreach($status as $opcoes)
            <option value="{{ $opcoes->id }}" {{ ($produto->status_id ?? old('status_id')) == $opcoes->id ? 'selected' : '' }} >{{ $opcoes->status }}</option>
            @endforeach
        </select>

        </select>




