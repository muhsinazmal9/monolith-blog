import { Head, Link } from '@inertiajs/react'
import BlogCard from '../../Components/Layouts/BlogCard'

const Show = ({ category }) => {
    return (
        <div>
            <Link href={'/'} className='px-4 py-2 bg-gray-200'>Back</Link>
            <h1>
                {category.name}
            </h1>
            <hr />
            <div className='flex gap-4 flex-wrap p-4'>

                {category.blogs.map(blog => (
                    <BlogCard key={blog.id} blog={blog} />
                ))}

            </div>

        </div>
    )
}

export default Show