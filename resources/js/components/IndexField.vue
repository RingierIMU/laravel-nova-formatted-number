<template>
  <span>{{ field.value | numberFormat(field.format) }}</span>
</template>

<script>
import numeral from "numeral";

export default {
  props: ["resourceName", "field"],

  filters: {
    numberFormat(number, format) {
      return numeral(number).format(format);
    }
  }
};
</script>
