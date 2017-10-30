<div class="form-row">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group col-md-4">
        <label for="website">Sito Web</label>
        <input type="text" class="form-control" id="website" name="website" placeholder="Sitio Web" value="{{ old('website', $prospect->website) }}">
    </div>

    <div class="form-group col-md-4">
        <label for="url">URL</label>
        <input type="text" class="form-control" id="url" name="url" placeholder="URL" value="{{ old('url', $prospect->url) }}">
    </div>
    <div class="form-group col-md-4">
        <label for="address">Direccion</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Direccion" value="{{ old('address', $prospect->address) }}">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="order">Giro</label>
        <input type="text" class="form-control" id="order" name="order" placeholder="Giro" value="{{ old('order', $prospect->order) }}">
    </div>
    <div class="form-group col-md-4">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email', $prospect->email) }}">
    </div>
    <div class="form-group col-md-4">
        <label for="phone">Telefono</label>
        <input type="number" class="form-control" id="phone" name="phone" placeholder="Telefono" value="{{ old('phone', $prospect->phone) }}">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="contact_name">Nombre de contacto</label>
        <input type="text" class="form-control" id="contact_name" name="contact_name" placeholder="Nombre de contacto" value="{{ old('contact_name', $prospect->contact_name) }}">
    </div>
    <div class="form-group col-md-4">
        <label for="comments">Comentarios</label>
        <textarea class="form-control" id="comments" name="comments" placeholder="Comentarios">{{ old('comments', $prospect->comments) }}</textarea>
    </div>
    <div class="form-group col-md-4">
        <label for="tracing">Seguimiento</label>
        <textarea type="text" class="form-control" id="tracing" name="tracing" placeholder="Seguimiento">{{ old('tracing', $prospect->tracing) }}</textarea>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="status">Estatus</label>
        <select name="status" id="status" class="custom-select">
            <option value="1">Preguntar por status</option>
            <option value="2">Pendiente</option>
        </select>
    </div>
</div>

<div class="row col-lg-12">
    <button type="submit" class="btn btn-info">Enviar</button>
</div>
