const defaults = {
  baseline: 16,
  precision: 5,
};

const rounded = (value, precision) => {
  precision = Math.pow(10, precision);
  return Math.floor(value * precision) / precision;
};

const convert = (value, to = 'rem', options = {}) => {
  const { baseline, precision } = {...defaults, ...options};

  // Number
  if (typeof value === 'number') {
    if (to === 'px') {
      return rounded(value * parseFloat(baseline), precision) + to;
    }

    return rounded(value / parseFloat(baseline), precision) + to;
  }

  // Array
  if (Array.isArray(value)) {
    return value.map((val) => convert(val, to, options));
  }

  // Object
  if (typeof value === 'object') {
    return Object.fromEntries(Object.entries(value).map(([key, val]) => [key, convert(val, to, options)]));
  }

  // String
  return value.replace(/(\d*\.?\d+)(rem|px)/g, (match, val, from) => {
    if (from === 'px' && (to === 'rem' || to === 'em')) {
      return convert(parseFloat(val), to, options);
    }

    if (from === 'rem' && to === 'px') {
      return convert(parseFloat(val), to, options);
    }

    return match;
  });
};

const rem = (value, options) => convert(value, 'rem', options);

const em = (value, baseline, options) => convert(value, 'em', { baseline, ...options });

const px = (value, options) => convert(value, 'px', options);

export default rem;
export { convert, em, px, rem };
