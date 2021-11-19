# Startijenn Rem [![Build Status][ci-img]][ci]

JavaScript function to convert CSS rem units. Used by [postcss-rem](https://github.com/pierreburel/postcss-rem).

[ci-img]: https://travis-ci.org/pierreburel/startijenn-rem.svg
[ci]: https://travis-ci.org/pierreburel/startijenn-rem

## Usage

Install with `npm i startijenn-rem`.

```js
import rem, { em, px, convert } from "startijenn-rem";

const unitless = rem(24);
// '1.5rem'

const simple = rem("24px");
// '1.5rem'

const multipleValues = rem("5px -10px 1.5rem");
// '0.3125rem -0.625rem 1.5rem'

const multipleMixedValues = rem("1px solid black");
// '0.0625rem solid black'

const commaSeparatedValues = rem("0 0 2px #ccc, inset 0 0 5px #eee");
// '0 0 0.125rem #ccc, inset 0 0 0.3125rem #eee'

const variable = "5px";
const withVariable = rem(`${variable} 10px`);
// '0.3125rem 0.625rem'

const array = rem([24, "24px", "5px -10px 1.5rem"]);
// ['1.5rem', '1.5rem', '0.3125rem -0.625rem 1.5rem']

const object = rem({
  fontSize: 24,
  margin: "24px",
  padding: "5px -10px 1.5rem",
});
// {fontSize: '1.5rem', margin: '1.5rem', padding: '0.3125rem -0.625rem 1.5rem'}

const changingBaseline = rem("24px", { baseline: 10 });
// '2.4rem'

const changingPrecision = rem("16px", { baseline: 12, precision: 3 });
// '1.333rem'

const convertToPx = px("1.5rem 24px");
// '24px 24px'

const convertFunction = convert("24px", "em", { baseline: 12 });
// '2em' (can only convert to rem, em or px)

const StyledComponent = styled.h1`
  font-size: ${(fontSize) => rem(fontSize)};
  padding: ${(fontSize) => em(12, fontSize)};
  margin: ${rem("8px 16px")};
`;
// .StyledComponent { font-size: 1.5rem; padding: 0.5em; margin: 0.5rem 1rem; }

const h1 = (text) => <StyledComponent fontSize={24}>{text}</StyledComponent>;
```

You can change the default options of the functions by doing your own aliases.

```js
import { convert } from "startijenn-rem";

export const rem = (value) => convert(value, "rem", { baseline: 10 });

export const em = (value, baseline = 10) => convert(value, "em", { baseline });

export default rem;
```

```js
import rem, { em } from "./utils/rem";

const unitless = rem(24);
// '2.4rem'

const convertToEm = em("12px", "24px");
// '0.5em'

const object = rem({
  fontSize: 24,
  margin: "24px",
  padding: "5px -10px 1.5rem",
});
// {fontSize: 2.4, margin: '2.4rem', padding: '0.5rem -1rem 1.5rem'}

const StyledComponent = styled.h1`
  font-size: ${(fontSize) => rem(fontSize)};
  padding: ${(fontSize) => em("6px 12px", fontSize)};
`;
// .StyledComponent { font-size: 2.4rem; padding: 0.25em 0.5em; }

const h1 = (text) => <StyledComponent fontSize={24}>{text}</StyledComponent>;
```
