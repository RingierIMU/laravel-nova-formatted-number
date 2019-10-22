<template>
  <default-field :field="field" :errors="errors">
    <template slot="field">
      <input
        :id="field.name"
        type="text"
        class="w-full form-control form-input form-input-bordered"
        :class="errorClasses"
        :placeholder="field.name"
        :value="formattedNumber"
        @input="handleChange"
      />
    </template>
  </default-field>
</template>

<script>
import { FormField, HandlesValidationErrors } from "laravel-nova";
import numeral from "numeral";

export default {
  mixins: [FormField, HandlesValidationErrors],

  props: ["resourceName", "resourceId", "field"],

  methods: {
    /*
     * Set the initial, internal value for the field.
     */
    setInitialValue() {
      this.value = this.field.value || "";
    },

    /**
     * Fill the given FormData object with the field's internal value.
     */
    fill(formData) {
      formData.append(
        this.field.attribute,
        numeral(this.formattedNumber).value() || ""
      );
    },

    /**
     * Update the field's internal value.
     */
    handleChange(value) {
      this.value = value.target.value;
    }
  },

  computed: {
    formattedNumber(number) {
      return numeral(number.value).format(this.field.format);
    }
  }
};
</script>
