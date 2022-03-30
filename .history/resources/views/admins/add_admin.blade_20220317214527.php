<select class="js-example-placeholder-single js-states form-control">
  <option></option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
</select>


<script>
$(".js-example-placeholder-single").select2({
    placeholder: "Select a state",
    allowClear: true
});
</script>