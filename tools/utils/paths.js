import path from 'path';

const { resolve } = path;
const root = resolve(process.env.PWD);
const theme = `${root}/wp-content/themes/_view`;

const paths = {
  src: {
    styles: `${root}/src/styles`,
    scripts: `${root}/src/scripts`,
    images: `${root}/src/images`,
    fonts: `${root}/src/fonts`,
    svgs: `${root}/src/svgs`,
    views: `${root}/src/views`,
    blocks: `${root}/src/views/blocks`,
  },
  dist: {
    styles: `${theme}/dist/styles`,
    scripts: `${theme}/dist/scripts`,
    images: `${theme}/dist/images`,
    fonts: `${theme}/dist/fonts`,
    svgs: `${theme}/dist/svgs`,
    views: `${theme}/dist/views`,
    blocks: `${root}/dist/views/blocks`,
  },
};

export { paths, root, theme };
